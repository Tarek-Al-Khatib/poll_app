<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePoll extends Component
{
    public $title;

    public function render()
    {
        return view('livewire.create-poll');
    }

    public function showTitle(){
        dd($this->title);
        return view('livewire.create-poll');
    }
}
