<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Events extends Component
{
    public $time = '';

    protected $listeners = ['updateTime'];

    public function mount()
    {
        $this->time = $this->getTime();
    }

    private function getTime()
    {
        return now()->toDateTimeString();
    }

    public function updateTime()
    {
        $this->time = $this->getTime();
    }

    public function render()
    {
        return view('livewire.events');
    }
}
