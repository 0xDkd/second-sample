<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        switch($this->method())
        {
            // CREATE
            case 'POST':
                {
                    return [
                        'name' => 'required|max:50',
                        'email' => 'required|email|unique:users|max:255',
                        'password' => 'required|confirmed|min:6'
                    ];

                }
            // UPDATE
            case 'PUT':
            case 'PATCH':
                {
                    return [
                        'password'=>'nullable|confirmed|min:6',
                        'name'=> 'required|max:50'
                    ];
                }
            case 'GET':
            case 'DELETE':
            default:
                {
                    return [];
                };
        }
    }

    public function messages()
    {
        return [
            'name.required' => '用户名必须填写',
            'name.max' => '用户名太长啦',
            'email.email' => '请填写正确邮箱格式',
            'email.required' => '邮箱必须填写',
            'email.unique' => '邮箱已经被注册了',
            'email.max' => '邮箱太长',
            'password.required' => '密码不能为空',
            'password.confirmed' => '两次密码必须相同',
            'password.min' => '密码最少不得少于6位',
        ];
    }
}
