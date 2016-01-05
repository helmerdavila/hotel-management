<?php

namespace Hotel\Http\Requests;

use Hotel\Http\Requests\Request;

class UserCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->hasRole('admin', 'staff');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'      => 'required|between:2,100',
            'lastname'  => 'required|between:2,200',
            'email'     => 'email|between:2,100',
            'document'  => 'between:2,50',
            'more_data' => 'between:2,300',
        ];
    }
}
