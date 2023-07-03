<div>
    @section('title', 'Customers')
    @section('page_title', 'Customers')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List of Customers
                    <a class="btn btn-primary btn-sm text-white float-right" href="{{ route('customers.create') }}"><i class="fa fa-plus"></i> Add</a>
                </div>
                <div class="card-body">
                    @include('flash::message')
                    <div class="row mb-4">
                        <div class="col form-inline">
                            Show &nbsp;
                            <select wire:model="perPage" class="form-control">
                                <option>10</option>
                                <option>25</option>
                                <option>50</option>
                                <option>100</option>
                            </select> &nbsp;entries
                        </div>

                        <div class="col-2">
                             <input wire:model.debounce.300ms="search" class="form-control" type="text" placeholder="Search here">
                        </div>

                    </div>
                    <table id="userTable" class="table table-striped table-bordered nowrap">
                        <thead>
                        <tr>
                            <th>S.N.
                            </th>
                            <th wire:click="sortBy('company_name')" style="cursor: pointer;">Company Name @include('partials._sort-icon',['field'=>'company_name'])</th>
                            <th wire:click="sortBy('first_name')" style="cursor: pointer;">First Name @include('partials._sort-icon',['field'=>'first_name'])</th>
                            <th wire:click="sortBy('last_name')" style="cursor: pointer;">Last Name @include('partials._sort-icon',['field'=>'last_name'])</th>
                            <th wire:click="sortBy('phone_number')" style="cursor: pointer;">Phone Number @include('partials._sort-icon',['field'=>'phone_number'])</th>
                            <th width="10%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($items as $i => $customer)
                                <tr>
                                    <td>{{ $i+1 }}</td>
                                    <td>{{ $customer->company_name }}</td>
                                    <td>{{ $customer->first_name }}</td>
                                    <td>{{ $customer->last_name }}</td>
                                    <td>{{ $customer->phone_number }}</td>
                                    <td>
                                        <div class="action-btn">
                                            <a href="{{ route('customers.show',$customer->id) }}"  class="btn btn-primary btn-sm mr-1 text-white"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('customers.edit',$customer->id) }}"  class="btn btn-info btn-sm mr-1 text-white"><i class="fa fa-edit"></i></a>
                                            <a href="javascript.void(0)" wire:click.prevent="deleteConfirm({{ $customer->id }})" class="btn btn-danger btn-sm mr-1 text-white"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No data available</td>
                                </tr>
                           @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-between">
                        <div>
                            Showing {{$items->firstItem()}} to {{$items->lastItem()}} out of {{$items->total()}} items
                        </div>
                        {{ $items->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
