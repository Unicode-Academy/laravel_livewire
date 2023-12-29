<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class RegisterForm extends Form
{
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
    public $email = null;

    /*
    #[Validate('required', message: [
        'required' => 'Mật khẩu bắt buộc phải nhập'
    ])]
    */
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
            'email' => 'required|email',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute bắt buộc phải nhập',
            'min' => ':attribute phải từ :min ký tự',
            'email' => ':attribute không đúng định dạng email'
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
