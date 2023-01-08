<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */public function authorize()
    {
        if ($this->path() == '/'){
            return true;
        }else {
            return false;
        }
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */public function rules()
    {
        return [
        'name' => 'required',
        'role' => 'required',
        'email' => 'required|email',
        'age' => 'numeric',
        'registered_at' => 'date|nullable',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力して下さい',
            'role.required' => '役職を入力して下さい',
            'email.required' => 'メールアドレスを入力して下さい',
            'email.email' => 'メールアドレスの形式で入力して下さい',
            'age.numeric' => '年齢は数値で入力して下さい',
            'registered_at.date' => '日付の形式で入力して下さい',
        ];
    }

    protected function getRedirectUrl()
    {
        return 'verror';
    }
}
