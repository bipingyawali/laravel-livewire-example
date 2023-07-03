<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $form = [
        'name'                  => '',
        'email'                 => '',
        'password'              => '',
        'password_confirmation' => '',
    ];

    protected $rules = [
        'form.email'    => 'required|email|unique:users,email',
        'form.name'     => 'required',
        'form.password' => 'required|confirmed',
    ];

    public function submit()
    {
        $this->validate();
        User::create($this->form);
        return redirect(route('login'));
    }

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.min')->section('content');
    }
}
