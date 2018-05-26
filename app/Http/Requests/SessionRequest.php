<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SessionRequest extends FormRequest
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
        switch ($this->method()) {
            case 'POST':
                {

                    return [
                        'email' => 'required|email|max:255',
                        'password' => 'required'
                    ];
                }
            case 'PATCH':
                {
                    return [];
                }
            case 'PUT':
            case 'DELETE':
            case 'GET':
            default:
                {
                    return [];
                }


        }
    }

    public function messages()
    {
        return [
            'email.email' => '请填写正确的邮箱地址',
            'email.required' => '邮箱不能为空',
            'password.required' => '密码不能为空',
        ];
    }
}
