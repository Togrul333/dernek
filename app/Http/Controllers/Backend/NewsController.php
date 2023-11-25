<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\FormNewsRequest;
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

class NewsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('news index'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if (request()->ajax()) {
            $count = News::count();
            $data = News::latest()->get();
            return $this->dataTable($data, $count);
        }
        return view('backend.news.index');
    }

    public function create()
    {
        abort_if(Gate::denies('news create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $edit = false;
        $langs = Language::active()->get();
        return view('backend.news.form', compact('edit', 'langs'));
    }

    public function store(FormNewsRequest $request, UploadDocumentService $uploadDocumentService)
    {
        abort_if(Gate::denies('news create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data = $request->validated();
        DB::beginTransaction();
        try {
            $news = News::create([
                'order' => $data['order'],
                'show_on_home' => $data['show_on_home'],
                'action_date' => $data['action_date'],
                'status' => $data['status'],
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
                $uploadDocumentService->upload('news', 'image', $news->id, 'news', true, $request);
            }
            DB::commit();
            return redirect(route('backend.news.index'))->withSuccess(trans('backend.messages.success.create'));
        } catch (\Exception $e) {
            DB::rollback();
            Log::channel('frontend')->error($e->getMessage());
            return redirect()->back()->withWarning(trans('backend.messages.error'));
        }
    }

    public function show(News $news): View
    {
        abort_if(Gate::denies('news show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('backend.news.show', compact('news'));
    }

    public function edit(News $news)
    {
        abort_if(Gate::denies('news edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $edit = true;
        $langs = Language::active()->get();
        return view('backend.news.form', compact('news', 'edit', 'langs'));
    }

    public function update(FormNewsRequest $request, News $news, UploadDocumentService $uploadDocumentService)
    {
        abort_if(Gate::denies('news edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data = $request->validated();
        DB::beginTransaction();
        try {
            $news->update([
                'order' => $data['order'],
                'show_on_home' => $data['show_on_home'],
                'action_date' => $data['action_date'],
                'status' => $data['status'],
            ]);
            foreach (Cache::get('active_langs') as $lang) {
                $news->translations()->updateOrcreate(
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
                $uploadDocumentService->upload('news', 'image', $news->id, 'news', true, $request);
            }
            DB::commit();
            return redirect(route('backend.news.index'))->withSuccess(trans('backend.messages.success.update'));
        } catch (\Exception $e) {
            DB::rollback();
            Log::channel('frontend')->error($e->getMessage());
            return redirect()->back()->withWarning(trans('backend.messages.error'));
        }
    }


    public function destroy(News $news)
    {
        abort_if(Gate::denies('news delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        foreach ($news->getDocuments('news') as $file) {
            Storage::disk('documents')->delete($file->getAttributes()['document']);
            $file->delete();
        }
        $news->delete();
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

        if (admin()->can('news show')) {
            $result .= "<a href='" . route('backend.news.show', ['news' => $id]) . "'";
            $result .= " class='$class'><i class='la la-eye'></i></a>";
        }

        if (admin()->can('news edit')) {
            $result .= "<a href='" . route('backend.news.edit', ['news' => $id]) . "'";
            $result .= " class='$class'><i class='la la-edit'></i></a>";
        }

        if (admin()->can('news delete')) {
            $result .= "<a href='" . route('backend.news.destroy', ['news' => $id]) . "'";
            $result .= " class='$class btn-delete'><i class='la la-trash'></i></a>";
        }

        return $result;
    }
}
