<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RisksRequest extends FormRequest
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
            'name'        => 'required',
            'risk_score'  => 'required',
            'action_by'   => 'required',
            'category'    => 'required',
            'impact'      => 'required',
            'probability' => 'required',
            'mitigation'  => 'required',
            'contingency' => 'required'
        ];
    }
}
