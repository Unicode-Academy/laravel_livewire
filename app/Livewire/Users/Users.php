<?php

namespace App\Livewire\Users;

use Livewire\Component;

class Users extends Component
{
    /*
    #[Url( as :'query', history: false)]
    public $keyword = '';

    #[Url(history: false)]
    public $status = 'all';
     */

    public $keyword = '';
    public $status = 'all';

    protected function queryString()
    {
        return [
            'keyword' => [
                'as' => 'query',
            ],
            'status',
        ];
    }

    public function render()
    {
        return view('livewire.users.users');
    }

    public function handleSubmit()
    {
        return $this->redirect('/users?query=' . $this->keyword . '&status=' . $this->status, true);
    }
}
