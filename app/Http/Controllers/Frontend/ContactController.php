<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\FormContactRequest;
use App\Models\ContactRequest;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index()
    {
        $locationData = [
            'latitude' => 41.0082,
            'longitude' => 28.9784,
            'decoded_address' => 'Истанбул, Турция',
        ];

        return view('frontend.pages.contact.index',compact('locationData'));
    }

    public function contactForm(FormContactRequest $request)
    {
        $data = $request->validated();
        try {
            ContactRequest::create([
                'ip' => $request->ip() ?? "",
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'subject' => $data['subject'],
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
