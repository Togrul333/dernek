<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class FormContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        $return[] = [
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'subject' => ['required'],
            'message' => ['required'],

        ];

        return Arr::collapse($return);

    }


    public function attributes()
    {
        return [

            'question:az'   => trans('backend.labels.question'),
            'answer:az'   => trans('backend.labels.answer')
        ];
    }
}
