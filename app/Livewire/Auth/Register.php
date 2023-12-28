<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Livewire\Forms\RegisterForm;

class Register extends Component
{
    public RegisterForm $form;


    public function handleSubmit()
    {
        $this->form->validate();

        return redirect()->to('/register');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
