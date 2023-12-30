<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Title;

class Login extends Component
{
    #[Title('Đăng nhập')]

    public $email = null;
    public $password = null;
    public $description = 'Đăng nhập hệ thống';

    public function handleSubmit()
    {
        //$data = $this->only(['email', 'password']);
        $email = $this->email;
        $password = $this->password;
        return $this->redirect('/todos', navigate: true);
    }
    public function render()
    {
        return view('livewire.auth.login')->layoutData(
            ['description' => $this->description]
        );
    }
}
