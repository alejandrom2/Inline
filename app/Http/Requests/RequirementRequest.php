<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequirementRequest extends FormRequest
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
            'name'                  => 'required',
            'date_requested'        => 'required|date',
            'text'                  => 'required',
            'source_doc'            => 'required',
            'source_doc_page'       => 'required',
            'source_doc_paragraph'  => 'required',
            'client_ref_page'       => 'required',
            'client_ref_paragraph'  => 'required',
            'deliverable_name'      => 'required',
            'deliverable_id'        => 'required',
        ];
    }
}
