<?php

namespace App\Http\Requests\Backend;

use App\Models\Language;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;

class FormDonationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'order' => $this->has('order') ? '1' : '1',
        ]);
    }

    public function rules()
    {
        $active_langs = Cache::rememberForever('active_langs', function () {
            return Language::active()->get();
        });

        foreach ($active_langs as $lang){
            $return[] = [
                'title:' . $lang['code'] => ['required'],
                'content:' . $lang['code'] => ['required'],
                'description:' . $lang['code'] => ['required'],
                'slug:' . $lang['code'] => ['required'],
            ];
        }

        // For Store
        $return[] = [
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'order' => ['nullable'],
            'price' => ['nullable'],
            'percent' => ['nullable'],
            'raised' => ['nullable'],
            'goal' => ['nullable'],
        ];

        // For Update
        if ($this->filled('_method') && $this->get('_method') == 'PUT') {
            $return[] = [
                'image' => 'filled',
            ];
        }

        return Arr::collapse($return);

    }

    public function attributes()
    {
        return [
            'image'     => trans('backend.labels.image'),
        ];
    }
}
