<?php

namespace App\Http\Requests;

use Anik\Form\FormRequest;
use Illuminate\Http\Request;

class BarangayOfficialRequest extends FormRequest
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
                'age' => 'required|int|min:1',
                'gender' => 'required|string|max:20',
                'birthPlace' => 'required|string|min:10|max:50',
                'birthDate' => 'required|date_format:Y-m-d H:i:s',
                'phoneNumber' => 'required|digits:11',
                'email' => 'required|email|unique:barangay_officials|max:120',
                'purok' => 'required|int|max:11',
                'startTerm' => 'required|date_format:Y-m-d H:i:s',
                'endTerm' => 'required|date_format:Y-m-d H:i:s',

                // Relationships
                'barangay' => 'required|integer|exists:barangays,id',
                'civilStatus' => 'required|integer|exists:civil_statuses,id',
                'employmentStatus' => 'required|integer|exists:employment_statuses,id',
                'position' => 'required|integer|exists:positions,id'
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
            'status' => 'string|min:3|status',
            'age' => 'int|min:1',
            'gender' => 'string|max:20',
            'birthPlace' => 'string|min:10|max:50',
            'birthDate' => 'date_format:Y-m-d H:i:s',
            'phoneNumb' => 'digits:11',
            'email' => 'email|unique:barangay_officials,email,'. $this->id .'|max:120',
            'purok' => 'int|max:11',
            'startTerm' => 'date_format:Y-m-d H:i:s',
            'endTerm' => 'date_format:Y-m-d H:i:s',

            // Relationships
            'barangay' => 'integer|exists:barangays,id',
            'civilStatus' => 'integer|exists:civil_statuses,id',
            'employmentStatus' => 'integer|exists:employment_statuses,id',
            'position' => 'integer|exists:positions,id'
        ];
    }
}