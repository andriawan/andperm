<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $name;
    public $test;

    public function render()
    {
        return view('livewire.login');
    }
}
