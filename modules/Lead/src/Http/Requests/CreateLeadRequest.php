<?php

namespace Modules\Lead\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateLeadRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'phone_number' => ['required', 'regex:/(0)[0-9]{10}', 'unique:leads,phone_number'],
            'email' => ['required', 'email:rfc', 'unique:leads,email'],
            'name' => ['required', 'string', 'between:2,50'],
        ];
    }
}
