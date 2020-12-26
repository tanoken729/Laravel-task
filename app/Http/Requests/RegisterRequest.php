<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * 認証関係の判定を行う場合はここに処理を記述する。
     * 特にない場合は常にtrueを返しておく。
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
            'name' => 'required',
            'mail' => 'required',
            'password' => 'required|min: 7|confirmed',
            'password_confirmation' => 'required',
        ];
    }
}
