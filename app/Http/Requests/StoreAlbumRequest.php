<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

//helpers
use illuminate\support\Facades\Auth;

class StoreAlbumRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:70',
            'year' => 'required',
            'description' => 'required',
            'country' => 'nullable'
        ];
    }
}
