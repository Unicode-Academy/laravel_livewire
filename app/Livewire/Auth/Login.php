<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email = null;
    public $password = null;
    public function handleSubmit()
    {
        //$data = $this->only(['email', 'password']);
        $email = $this->email;
        $password = $this->password;
        dd($email, $password);
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
