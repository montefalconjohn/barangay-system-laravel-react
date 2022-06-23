<?php

namespace App\Http\Requests;

use Anik\Form\FormRequest;
use Illuminate\Http\Request;

class ResidentsRequest extends FormRequest
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
            'firstName' => 'required|string|min:3|max:120',
            'lastName' => 'required|string|min:3|max:120',
            'gender' => 'required|bool',
            'purok' => 'required|int|min:1',
            'address' => 'required|string|min:20|max:500',
            'birthPlace' => 'required|string|min:10|max:50',
            'birthDate' => 'required|date_format:Y-m-d H:i:s',
            'age' => 'required|int|min:1',
            'phoneNumber' => 'required|digits:11',
            'occupation' => 'required|string|min:20|max:50',
            'purok' => 'required|int|max:11',
            'email' => 'required|email|unique:residents|max:120',

            // Relationships
            'civilStatus' => 'required|integer|exists:civil_statuses,id',
            'citizenship' => 'required|integer|exists:citizenship,id',
        ];
    }

    /**
     * Validation for patch method request
     */
    private function patchValidation()
    {
        return [
            'firstName' => 'string|min:3|max:120',
            'lastName' => 'string|min:3|max:120',
            'gender' => 'bool',
            'purok' => 'int|min:1',
            'address' => 'string|min:20|max:500',
            'birthPlace' => 'string|min:10|max:50',
            'birthDate' => 'date_format:Y-m-d H:i:s',
            'age' => 'int|min:1',
            'phoneNumber' => 'digits:11',
            'occupation' => 'string|min:20|max:50',
            'purok' => 'int|max:11',
            'email' => 'email|unique:residents,' . $this->id .'|max:120',

            // Relationships
            'civilStatus' => 'integer|exists:civil_statuses,id',
            'citizenship' => 'integer|exists:citizenship,id',
        ];
    }
}
