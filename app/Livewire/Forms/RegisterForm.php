<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;

class RegisterForm extends Form
{
    #[Validate()]
    /*
    #[Validate('required|min:5', message: [
        'required' => 'Tên bắt buộc phải nhập',
        'min' => 'Tên phải từ :min ký tự'
    ])]
    */
    public $name = null;

    /*
    #[Validate('required|email', message: [
        'required' => 'Email bắt buộc phải nhập',
        'email' => 'Email không đúng định dạng',
    ])]
    */
    #[Validate()]
    public $email = null;

    /*
    #[Validate('required', message: [
        'required' => 'Mật khẩu bắt buộc phải nhập'
    ])]
    */
    #[Validate()]
    public $password = null;

    public function store()
    {
        $this->validate();
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                'min:5',
                function ($attribute, $value, $fail) {
                    if (mb_strtoupper($value, 'UTF-8') != $value) {
                        $fail('Họ tên bắt buộc phải là chữ HOA');
                    }
                }
            ],
            //'email' => 'required|email|unique:users,email,1',
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore(1)],
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute bắt buộc phải nhập',
            'min' => ':attribute phải từ :min ký tự',
            'email' => ':attribute không đúng định dạng email',
            'unique' => ':attribute đã được sử dụng',
        ];
    }

    public function validationAttributes()
    {
        return [
            'name' => 'Tên',
            'email' => 'Email',
            'password' => 'Mật khẩu'
        ];
    }
}
