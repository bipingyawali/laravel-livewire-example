<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Customer;
use Livewire\Component;

class Index extends Component
{
    public $total_customers = 0;
    public function render()
    {
        $this->total_customers = Customer::count();
        return view('livewire.dashboard.index')->extends('layouts.main')->section('content');
    }
}
