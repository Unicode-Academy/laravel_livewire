<?php

namespace App\Livewire\Users;

use App\Models\User;
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
    public $users = [];

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

    public function mount()
    {
        $this->users = User::orderBy('id', 'desc');
        if ($this->keyword) {
            $this->users->where(function ($query) {
                $query->where('name', 'like', '%' . $this->keyword . '%');
                $query->orWhere('email', 'like', '%' . $this->keyword . '%');
            });
        }
        if ($this->status === 'active' || $this->status === 'inactive') {
            $this->users->where('status', $this->status === 'active' ? 1 : 0);
        }

        $this->users = $this->users->get();
    }

    public function handleSubmit()
    {
        return $this->redirect('/users?query=' . $this->keyword . '&status=' . $this->status, true);
    }
}
