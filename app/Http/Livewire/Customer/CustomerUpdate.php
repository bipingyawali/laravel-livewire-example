<?php

namespace App\Http\Livewire\Customer;

use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash;
use Livewire\Component;

class CustomerUpdate extends Component
{
    public $form = [
        'company_name'   => '',
        'first_name'=> '',
        'last_name'=> '',
        'phone_number'=> '',
        'house_number'=> '',
        'street'=> '',
        'town'=> '',
        'county'=> '',
        'postcode'=> '',
        'country'=> '',
        'latitude'=> '',
        'longitude'=> '',
    ];
    public $cid;
    protected $rules = [
        'form.company_name' => 'required',
        'form.first_name' => 'required',
        'form.last_name' => 'required',
        'form.phone_number' => 'required',
        'form.house_number' => 'required',
        'form.street' => 'required',
        'form.town' => 'required',
        'form.county' => 'required',
        'form.postcode' => 'required',
        'form.country' => 'required',
        'form.latitude' => 'required',
        'form.longitude' => 'required',
    ];

    public function mount($id){
        $this->form = Customer::findOrFail($id);
        $this->cid = $id;
    }

    public function update()
    {
        $validData = $this->validate();
        DB::beginTransaction();
        try {
            Customer::findOrFail($this->cid)->update($validData['form']);
            DB::commit();
            $message = 'Customer updated successfully.';
            Flash::success($message);
            return redirect()->route('customers.index');
        } catch (\Exception $exception){
            DB::rollBack();
            $message = 'Failed to update customer.';
            if (env('APP_DEBUG'))
                $message = $exception->getMessage() . 'Line #' . $exception->getLine();
            Flash::error($message);
        }
    }

    public function render()
    {
        return view('livewire.customer.customer-update')->extends('layouts.main')->section('content');
    }
}
