<?php

namespace App\Http\Requests;

use Anik\Form\FormRequest;
use Illuminate\Http\Request;

class BarangayOfficialsRequest extends FormRequest
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
     * Validation for post method request
     */
    private function postValidation()
    {
        return [
                'first_name' => 'required|string|min:3|max:120',
                'last_name' => 'required|string|min:3|max:120',
                'age' => 'required|int|min:1|max:11',
                'gender' => 'required|string|max:20',
                'birthplace' => 'required|string|min:10|max:50',
                'birthdate' => 'required|date_format:d/m/Y',
                'phone_number' => 'required|digits:11',
                'email' => 'required|email|unique:barangay_officials|max:120',
                'purok' => 'required|int|max:11',
                'term' => 'required|int|max:11'
        ];
    }

    /**
     * Validation for patch method request
     */
    private function patchValidation()
    {
        return [
            'first_name' => 'string|min:3|max:120',
            'last_name' => 'string|min:3|max:120',
            'status' => 'string|min:3|status',
            'age' => 'int|min:1|max:11',
            'gender' => 'string|max:20',
            'birthplace' => 'string|min:10|max:50',
            'birthdate' => 'date_format:d/m/Y',
            'phone_number' => 'digits:11',
            'email' => 'email|unique:book_officials,email,'. $this->id .'|max:120',
            'purok' => 'int|max:11',
            'term' => 'int|max:11'
        ];
    }
}