<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class UserInsert extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    //给予授权
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    //校验规则
    public function rules()
    {
        return [
            //会员名做规则设置
             'name'=>'required|regex:/\w{4,8}/|unique:users',
             //密码和重复密码
             'pass'=>'required|regex:/\w{8,16}/',
             'repass'=>'required|regex:/\w{8,16}/|same:pass',
             'email'=>'required|email',

        ];
    }


    public function messages()
{
    return [
        'name.required' => '名字不能为空',
        'name.regex' => '用户名必须是4-8位任意字符',
        'name.unique' => '用户名重复了',
        'pass.required'  => '密码不能为空',
        'pass.regex'  => '密码必须为8-16位任意字符',
        'repass.required'  => '重复密码不能为空',
        'repass.regex'  => '重复密码必须为8-16位任意字符',
        'repass.same' => '重复密码必须一致',
        'email.required' => '邮件不能为空',
        'email.email' => '邮件不符合格式'
            ];
}
}
