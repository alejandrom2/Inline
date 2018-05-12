<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActionItemRequest extends FormRequest
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
            'name'           => 'required',
            'priority'       => 'required',
            'severity'       => 'required',
            'status'         => 'required',
            'description'    => 'required',
            'date_created'   => 'date',
            'date_assigned'  => 'date',
            'date_expected'  => 'date',
            'date_completed' => 'date'
        ];
    }
}
