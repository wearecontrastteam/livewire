<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        return view('livewire.search', [
            'users' => User::where('name', 'like', '%' . $this->search . '%')->paginate(15)
        ]);
    }
}
