<div>
    @section('title', 'Update Customer')
    @section('page_title', 'Update Customer')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add New Customer
                    <a class="btn btn-primary btn-sm text-white float-right" href="{{ route('customers.index') }}"><i class="fa fa-list"></i> Lists</a>
                </div>
                <div class="card-body">
                    @include('flash::message')
                    <form wire:submit.prevent="update">
                        @include('livewire.customer.partial.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
