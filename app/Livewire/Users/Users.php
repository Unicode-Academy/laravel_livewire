<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Url;

class Users extends Component
{
    /*
    #[Url( as :'query', history: false)]
    public $keyword = '';

    #[Url(history: false)]
    public $status = 'all';
     */

    #[Url(as: 'query', history: true)]
    public $keyword = '';

    #[Url(history: true)]
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

    public function updated()
    {
        $this->filterUsers();
    }

    public function mount()
    {
        $this->filterUsers();
    }

    private function filterUsers()
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
        $query = [
            'query' => $this->keyword,
            'status' => $this->status
        ];
        return $this->redirect('/users?' . http_build_query($query), true);
    }
}
