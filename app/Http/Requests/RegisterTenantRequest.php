<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterTenantRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'company' => 'required|string|max:255',
            'domain' =>['required','unique:tenants'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Password::defaults()],

        ];
    }

    public function prepareForValidation(){
        $this->merge([
           // $domain->domain = $domain->domain . '.' . config('tenancy.central_domains')[0],
            'domain'=> $this->domain . '.' .config('tenancy.central_domains')[0]
        ]
        );

    }
}
