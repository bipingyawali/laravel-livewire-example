<?php

namespace App\Http\Livewire\Customer;

use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash;
use Livewire\Component;

class CustomerCreate extends Component
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

    public function createCustomer(){
        $validData = $this->validate();
        DB::beginTransaction();
        try{
            Customer::create($validData['form']);
            DB::commit();
            $message = 'Customer added successfully.';
            Flash::success($message);
            return redirect()->route('customers.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            $message = 'Failed to add customer.';
            if (env('APP_DEBUG'))
                $message = $exception->getMessage() . 'Line #' . $exception->getLine();
            Flash::error($message);
        }
    }

    public function messages()
    {
        return [
            'form.company_name.required' => 'The company_name field is required.',
            'form.first_name.required' => 'The first_name field is required.',
            'form.last_name.required' => 'The last_name field is required.',
            'form.phone_number.required' => 'The phone_number field is required.',
            'form.house_number.required' => 'The house_number field is required.',
            'form.street.required' => 'The street field is required.',
            'form.town.required' => 'The town field is required.',
            'form.postcode.required' => 'The postcode field is required.',
            'form.country.required' => 'The country field is required.',
            'form.latitude.required' => 'The latitude field is required.',
            'form.longitude.required' => 'The longitude field is required.',
        ];
    }

    public function render()
    {
        return view('livewire.customer.customer-create')->extends('layouts.main')->section('content');
    }
}
