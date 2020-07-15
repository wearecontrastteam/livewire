<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Action extends Component
{
    public $name = '';

    public function resetName()
    {
        $this->name = 'reset';
    }

    public function render()
    {
        return view('livewire.action');
    }
}
