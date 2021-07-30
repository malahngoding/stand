<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;

class Counter extends Component
{
    public $count;
    public $users;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function mount()
    {
        $this->users = [];
    }

    public function render()
    {
        return view('livewire.counter');
    }

    public function addData()
    {
        $this->users = DB::table('users')->get();
        // return view('addData',['count'=>$count]);
    }
}
