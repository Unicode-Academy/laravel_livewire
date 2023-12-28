<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class RegisterForm extends Form
{
    public $name = null;
    public $email = null;
    public $password = null;

    /*
    public function store()
    {
        $data = $this->only(['name', 'email', 'password']);
        $this->reset();
        //dd($data);
    }
    */
}
