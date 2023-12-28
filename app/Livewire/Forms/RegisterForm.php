<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class RegisterForm extends Form
{
    #[Validate('required|min:5', null, null, [
        'required' => 'Tên bắt buộc phải nhập',
        'min' => 'Tên phải từ :min ký tự'
    ])]
    public $name = null;

    #[Validate('required|email', null, null, [
        'required' => 'Email bắt buộc phải nhập',
        'email' => 'Email không đúng định dạng',
    ])]
    public $email = null;

    #[Validate('required', null, null, [
        'required' => 'Mật khẩu bắt buộc phải nhập'
    ])]
    public $password = null;
}
