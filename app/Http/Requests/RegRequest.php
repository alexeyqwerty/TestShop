<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegRequest extends FormRequest
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
            'name' => 'required|alpha',
            'phone' => 'required|regex:/^\+7[0-9]{10}$/',
            'email' => 'required|email',
            'pass' => 'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[\$\%\&\!\:])[a-zA-Z\$\%\&\!\:]{6,}$/',
            'passRepeat' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле с именем не заполнено',
            'name.alpha' => 'Имя может состоять только из букв',
            'phone.required' => 'Поле с номером телефона не заполнено',
            'phone.regex' => 'Номер телефона введен некорректно',
            'email.required' => 'Поле email не заполнено',
            'email.email' => 'Email введен некорректно',
            'pass.regex' => 'Пароль введен некорректно',
            'pass.required' => 'Поле с паролем не заполнено',
            'passRepeat.required' => 'Поле с повтором пароля не заполнено'
        ];
    }
}
