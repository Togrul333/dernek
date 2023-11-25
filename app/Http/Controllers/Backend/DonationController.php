<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\FormDonationRequest;
use App\Http\Requests\Backend\FormNewsRequest;
use App\Models\Donation;
use App\Models\Language;
use App\Models\News;
use App\Models\Slider;
use App\Services\UploadDocumentService;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class DonationController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('donations index'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if (request()->ajax()) {
            $count = Donation::count();
            $data = Donation::latest()->get();
            return $this->dataTable($data, $count);
        }
        return view('backend.donations.index');
    }

    public function create()
    {
        abort_if(Gate::denies('donations create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $edit = false;
        $langs = Language::active()->get();
        return view('backend.donations.form', compact('edit', 'langs'));
    }

    public function store(FormDonationRequest $request, UploadDocumentService $uploadDocumentService)
    {
        abort_if(Gate::denies('donations create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data = $request->validated();
        DB::beginTransaction();
        try {
            $news = Donation::create([
                'order' => $data['order'],
            ]);
            foreach (Cache::get('active_langs') as $lang) {
                $news->translations()->create([
                    'locale' => $lang->code,
                    'title' => $data['title:' . $lang->code],
                    'content' => $data['content:' . $lang->code],
                    'description' => $data['description:' . $lang->code],
                    'slug' => $data['slug:' . $lang->code],
                ]);
            }
            if ($request->hasFile('image')) {
                $uploadDocumentService->upload('donation', 'image', $news->id, 'donations', true, $request);
            }
            DB::commit();
            return redirect(route('backend.donations.index'))->withSuccess(trans('backend.messages.success.create'));
        } catch (\Exception $e) {
            DB::rollback();
            Log::channel('frontend')->error($e->getMessage());
            return redirect()->back()->withWarning(trans('backend.messages.error'));
        }
    }

    public function show(Donation $donation): View
    {
        abort_if(Gate::denies('donations show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('backend.donations.show', compact('donation'));
    }

    public function edit(Donation $donation)
    {
        abort_if(Gate::denies('donations edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $edit = true;
        $langs = Language::active()->get();
        return view('backend.donations.form', compact('donation', 'edit', 'langs'));
    }

    public function update(FormDonationRequest $request, Donation $donation, UploadDocumentService $uploadDocumentService)
    {
        abort_if(Gate::denies('donations edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data = $request->validated();
        DB::beginTransaction();
        try {
            $donation->update([
                'order' => $data['order'],
            ]);
            foreach (Cache::get('active_langs') as $lang) {
                $donation->translations()->updateOrcreate(
                    ['locale' => $lang->code],
                    [
                        'title' => $data['title:' . $lang->code],
                        'content' => $data['content:' . $lang->code],
                        'description' => $data['description:' . $lang->code],
                        'slug' => $data['slug:' . $lang->code],
                    ]
                );
            }
            if ($request->hasFile('image')) {
                $uploadDocumentService->upload('donation', 'image', $donation->id, 'donations', true, $request);
            }
            DB::commit();
            return redirect(route('backend.donations.index'))->withSuccess(trans('backend.messages.success.update'));
        } catch (\Exception $e) {
            DB::rollback();
            Log::channel('frontend')->error($e->getMessage());
            return redirect()->back()->withWarning(trans('backend.messages.error'));
        }
    }


    public function destroy(Donation $donation)
    {
        abort_if(Gate::denies('news delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        foreach ($donation->getDocuments('donations') as $file) {
            Storage::disk('documents')->delete($file->getAttributes()['document']);
            $file->delete();
        }
        $donation->delete();
        return response(['status' => 1]);
    }

    public function dataTable($data, $count)
    {
        return datatables()
            ->of($data)
            ->editColumn('title', function ($row) {
                return  Str::limit($row->translation->title, $limit = 30, $end = '...');
            })
            ->editColumn('content', function ($row) {
                return Str::limit($row->translation->content, $limit = 30, $end = '...');
            })
            ->editColumn('actions', function ($row) {
                return $this->permissions($row->id);
            })
            ->rawColumns(['actions'])
            ->skipPaging()
            ->setTotalRecords($count)
            ->setFilteredRecords($count)
            ->make(true);
    }

    public function permissions($id): string
    {
        $class = 'btn btn-sm btn-icon btn-clean';
        $result = '';

        if (admin()->can('donations show')) {
            $result .= "<a href='" . route('backend.donations.show', ['donation' => $id]) . "'";
            $result .= " class='$class'><i class='la la-eye'></i></a>";
        }

        if (admin()->can('donations edit')) {
            $result .= "<a href='" . route('backend.donations.edit', ['donation' => $id]) . "'";
            $result .= " class='$class'><i class='la la-edit'></i></a>";
        }

        if (admin()->can('donations delete')) {
            $result .= "<a href='" . route('backend.donations.destroy', ['donation' => $id]) . "'";
            $result .= " class='$class btn-delete'><i class='la la-trash'></i></a>";
        }

        return $result;
    }
}
