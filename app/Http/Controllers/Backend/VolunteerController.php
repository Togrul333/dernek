<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ContactRequest;
use App\Models\Volunteer;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class VolunteerController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('volunteers index'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if (request()->ajax()) {
            $count = Volunteer::count();
            $data = Volunteer::latest()->get();
            return $this->dataTable($data, $count);
        }
        return view('backend.volunteers.index');
    }
    public function show(Volunteer $volunteer): View
    {
        abort_if(Gate::denies('volunteers show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('backend.volunteers.show', compact('volunteer'));
    }


    public function destroy(Volunteer $volunteer)
    {
        abort_if(Gate::denies('volunteers delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $volunteer->delete();
        return response(['status' => 1]);
    }

    public function dataTable($data, $count)
    {
        return datatables()
            ->of($data)
            ->editColumn('name', function ($row) {
                return  $row->name;
            })
            ->editColumn('email', function ($row) {
                return $row->email;
            })
            ->editColumn('phone', function ($row) {
                return $row->phone;
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

        if (admin()->can('volunteers show')) {
            $result .= "<a href='" . route('backend.volunteers.show', ['volunteer' => $id]) . "'";
            $result .= " class='$class'><i class='la la-eye'></i></a>";
        }

        if (admin()->can('volunteers delete')) {
            $result .= "<a href='" . route('backend.volunteers.destroy', ['volunteer' => $id]) . "'";
            $result .= " class='$class btn-delete'><i class='la la-trash'></i></a>";
        }

        return $result;
    }
}
