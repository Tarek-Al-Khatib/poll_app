<?php

namespace App\Livewire;

use App\Models\Poll;
use Livewire\Component;

class CreatePoll extends Component
{
    public $title;
    public $options = ['First'];
    public function render()
    {
        return view('livewire.create-poll');
    }

    public function addOption(){
        $this->options[] = '';
    }

    public function removeOption($index){
        unset($this->options[$index]);
        $this->options = array_values($this->options);
    }

    public function createPoll(){
        $poll = Poll::create(['title' => $this->title]);

        foreach($this->options as $optionsname){
            $poll->options()->create(["name" => $optionsname]);
        }


        $this->reset(['title', 'options']);
    }
    // public function mount(){

    // }
}
