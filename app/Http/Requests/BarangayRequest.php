<?php

namespace App\Http\Requests;

use Anik\Form\FormRequest;
use Illuminate\Http\Request;

class BarangayRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    protected function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function rules(): array
    {
        return Request::isMethod('post') ? $this->postValidation() : $this->patchValidation();
    }

    /**
     * Validation for post request
     */
    private function postValidation(): array
    {
        return [
            'name' => 'required|string|max:120|unique:barangay',
            'municipality' => 'required|string|max:120',
            'province' => 'required|string|max:120',
            'email' => 'required|email|unique:barangay|max:120',
            'phone_number' => 'digits:11'
        ];
    }

    /**
     * Validation for patch request
     */
    private function patchValidation(): array
    {
        return [
            'name' => 'string|max:120',
            'municipality' => 'string|max:120',
            'province' => 'string|max:120',
            'email' => 'email|unique:barangay,email,'. $this->id .'|max:120',
            'phone_number' => 'digits:11'
        ];
    }
}
  