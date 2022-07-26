<?php

namespace App\Http\Requests;

use Anik\Form\FormRequest;
use Illuminate\Http\Request;

class ResidentRequest extends FormRequest
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
            'middleName' => 'required|string|min:3|max:120',
            'birthDate' => 'required|date_format:Y-m-d H:i:s',
            'birthPlace' => 'required|string|min:10|max:50',
            'age' => 'required|int|min:1',
            'zone' => 'required|int|min:1',
            'household' => 'required|int|min:1',
            'householdNumber' => 'required|int|min:1',
            'bloodType' => 'required|string|min:1|max:50',
            'occupation' => 'required|string|min:10|max:50',
            'religion' => 'required|string|min:5|max:50',
            'gender' => 'required|bool',
            'address' => 'required|string|min:20|max:500',
            'phoneNumber' => 'required|digits:11',
            'email' => 'required|email|unique:residents|max:120',

            // Relationships
            'barangay' => 'required|integer|exists:barangays,id',
            'civilStatus' => 'required|integer|exists:civil_statuses,id',
            'citizenship' => 'required|integer|exists:citizenships,id',
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
            'middleName' => 'string|min:3|max:120',
            'birthDate' => 'date_format:Y-m-d H:i:s',
            'birthPlace' => 'string|min:10|max:50',
            'age' => 'int|min:1',
            'zone' => 'int|min:1',
            'household' => 'int|min:1',
            'householdNumber' => 'int|min:1',
            'bloodType' => 'string|min:1|max:50',
            'occupation' => 'string|min:10|max:50',
            'religion' => 'string|min:5|max:50',
            'gender' => 'bool',
            'address' => 'string|min:20|max:500',
            'phoneNumber' => 'digits:11',
            'email' => 'email|unique:residents,' . $this->id .'|max:120',

            // Relationships
            'barangay' => 'integer|exists:barangays,id',
            'civilStatus' => 'integer|exists:civil_statuses,id',
            'citizenship' => 'integer|exists:citizenships,id',
        ];
    }
}
