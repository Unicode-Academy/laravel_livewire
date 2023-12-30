<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Livewire\Forms\RegisterForm;
use Livewire\Attributes\Title;

class Register extends Component
{
    #[Title('Đăng ký')]

    public $description = 'Đăng ký tài khoản';

    public RegisterForm $form;

    public function handleSubmit()
    {
        $this->form->store();

        return $this->redirect('/login', true);
    }

    public function updated($name, $value)
    {
        //dd($name, $value);
    }

    public function render()
    {
        return view('livewire.auth.register')->layoutData(
            ['description' => $this->description]
        );
    }
}
