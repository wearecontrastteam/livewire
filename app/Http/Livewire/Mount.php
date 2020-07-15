<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class Mount extends Component
{
    public $users = null;

    public function mount() {
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.mount');
    }
}
