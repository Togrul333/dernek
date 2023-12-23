<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\FormContactRequest;
use App\Http\Requests\Frontend\FormVolunterRequest;
use App\Models\ContactRequest;
use App\Models\Volunteer;
use Illuminate\Support\Facades\Log;

class VolunteerController extends Controller
{
    public function index()
    {

        return view('frontend.pages.volunteers.index');
    }

    public function volunteerForm(FormVolunterRequest $request)
    {
        $data = $request->validated();
        try {
            Volunteer::create([
                'ip' => $request->ip() ?? "",
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'country' => $data['country'],
                'city' => $data['city'],
                'role' => $data['role'],
                'message' => $data['message'],
            ]);
            return response()->json([
                'success' => true,
                'data' => '',
                'message' => 'talebiniz gönderildi'
            ]);
        } catch (\Exception $e) {
            Log::channel('frontend')->error($e->getMessage());
            return response()->json([
                'success' => false,
                'data' => '',
                'message' => $e->getMessage()
            ]);
        }
    }
}
