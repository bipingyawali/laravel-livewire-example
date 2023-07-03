<?php

namespace App\Http\Livewire\Customer;

use App\Models\Customer;
use Livewire\Component;

class CustomerDetail extends Component
{
    public $customer;
    public function mount($id){
        $this->customer = Customer::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.customer.customer-detail')->extends('layouts.main')->section('content');
    }
}
