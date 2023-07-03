<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;
use Livewire\Component;

class Login extends Component
{
    public $form = [
        'email'   => '',
        'password'=> '',
    ];

    public function submit()
    {
        $this->validate([
            'form.email'    => 'required|email',
            'form.password' => 'required',
        ]);
        if(Auth::attempt($this->form)){
            Flash::success("You are Login successful.");
            return redirect(route('home'));
        }else{
            Flash::error('email and password are wrong.');
        }

    }

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.min')->section('content');
    }
}
