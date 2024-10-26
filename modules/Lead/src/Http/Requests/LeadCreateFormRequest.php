<?php

namespace Modules\Lead\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeadCreateFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => ['required', 'string', 'between:2,50'],
            'phone_number' => ['required', 'regex:/^(\+?\d{1,3})?(\d{10})$/', 'unique:leads,phone_number'],
            'email' => ['required', 'email:rfc', 'unique:leads,email'],
        ];
    }
}
