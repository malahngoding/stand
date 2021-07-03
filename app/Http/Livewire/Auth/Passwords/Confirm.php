<?php

namespace App\Http\Livewire\Auth\Passwords;

use Livewire\Component;

class Confirm extends Component
{
    /** @var string */
    public $password = '';

    public function confirm()
    {
        $this->validate([
            'password' => 'required|password',
        ]);

        session()->put('auth.password_confirmed_at', time());

        return redirect()->intended(route('welcome'));
    }

    public function render()
    {
        return view('livewire.auth.passwords.confirm')->extends('layouts.auth');
    }
}
