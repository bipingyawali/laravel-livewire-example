<?php

namespace App\Http\Livewire\Customer;

use App\Models\Customer;
use Laracasts\Flash\Flash;
use Livewire\Component;
use Livewire\WithPagination;

class CustomerIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $sortBy = 'created_at';
    public $sortDirection = 'desc';
    public $perPage = 10;
    public $search = '';
    protected $listeners = ['delete'];

    public function render()
    {
        $items = Customer::query()->orderBy($this->sortBy, $this->sortDirection)
            ->search(['first_name','last_name','company_name', 'phone_number'], $this->search)
            ->paginate($this->perPage);

        return view('livewire.customer.customer-index',['items'=> $items])
            ->extends('layouts.main')->section('content');
    }

    public function sortBy($field)
    {
        if ($this->sortDirection == 'asc') {
            $this->sortDirection = 'desc';
        } else {
            $this->sortDirection = 'asc';
        }

        return $this->sortBy = $field;
    }

    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirm',[
            'type' => 'warning',
            'title' => 'Are you sure ?',
            'text' => '',
            'id' => $id
        ]);
    }

    public function delete($id)
    {
        try {
            Customer::findOrFail($id)->delete();
            $this->dispatchBrowserEvent('swal:success',[
                'title' => '',
                'text' => 'Customer is deleted successfully.',
            ]);
        } catch (\Exception $exception){
            $message = 'Failed to update customer.';
            if (env('APP_DEBUG'))
                $message = $exception->getMessage() . 'Line #' . $exception->getLine();
            Flash::error($message);
        }
    }
}
