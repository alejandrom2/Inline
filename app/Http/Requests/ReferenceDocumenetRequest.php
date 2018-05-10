<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReferenceDocumenetRequest extends FormRequest
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
            'name'             => 'required',
            'date_requested'   => 'required|date',
            'requirement_text' => 'required',
            'source_pg'        => 'required',
            'source_par'       => 'required',
            'client_pg'        => 'required',
            'client_par'       => 'required',
            'deliv_name'       => 'required',
            'deliv_id'         => 'required'
        ];
    }
}
