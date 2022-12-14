<?php

namespace App\Http\Requests\Admin\Merch;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMerchReq extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required'],
            'image' => ['sometimes', 'image', 'mimes:jpg,jpeg,png'],
            'price' => ['required'],
            'description' => ['required'],
            'form_link' => ['required','url'],
        ];
    }
}
