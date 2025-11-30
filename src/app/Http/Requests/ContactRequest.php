<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'last_name'   => 'required|string|max:255',
            'first_name'  => 'required|string|max:255',
            'gender'      => 'required|in:1,2,3',
            'email'       => 'required|email',
            'tel1'        => 'required|digits_between:2,4',
            'tel2'        => 'required|digits_between:2,4',
            'tel3'        => 'required|digits_between:3,4',
            'address'     => 'required|string|max:255',
            'category'    => 'required|in:1,2,3',
            'body'        => 'required|string|max:500',
        ];
    }

    public function messages()
    {
        return [
            'last_name.required'  => 'お名前（姓）は必須です。',
            'first_name.required' => 'お名前（名）は必須です。',
            'gender.required'     => '性別は必須です。',
            'email.required'      => 'メールアドレスは必須です。',
            'email.email'         => 'メールアドレスの形式が正しくありません。',
            'tel1.required'       => '電話番号は必須です。',
            'tel1.digits_between' => '電話番号の形式が正しくありません。',
            'tel2.required'       => '電話番号は必須です。',
            'tel2.digits_between' => '電話番号の形式が正しくありません。',
            'tel3.required'       => '電話番号は必須です。',
            'tel3.digits_between' => '電話番号の形式が正しくありません。',
            'address.required'    => '住所は必須です。',
            'category.required'   => 'お問い合わせ種類は必須です。',
            'body.required'       => 'お問い合わせ内容は必須です。',
        ];
    }
}
