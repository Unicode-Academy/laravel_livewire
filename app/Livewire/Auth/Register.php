<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Livewire\Forms\RegisterForm;

class Register extends Component
{
    public RegisterForm $form;

    public $email;

    public function handleSubmit()
    {
        $data = $this->form->only(['name', 'email']);
        $this->email = $this->form->email;
        $this->form->reset('password', 'email');
        // $this->form->store();
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
