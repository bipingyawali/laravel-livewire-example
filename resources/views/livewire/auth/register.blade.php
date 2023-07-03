<div>
    @section('title', 'Register')
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-md-12 p-5">
                            <div class="mx-auto mb-5">
                                <h3 class="d-inline align-middle ml-1 text-logo">Test App</h3>
                            </div>

                            <h6 class="h5 mb-0 mt-4">Create Account</h6>
                            <p class="text-muted mt-1 mb-4">Create Your Own Account.</p>

                            <form wire:submit.prevent="submit">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user icon-dual"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                    </span>
                                    <input wire:model.defer="form.name" type="text" class="form-control" placeholder="Enter Name.">
                                </div>
                                @error('form.name')
                                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $message }}</li></ul>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Email Address</label>
                                <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="mail"></i>
                                                        </span>
                                    </div>
                                    <input wire:model.defer="form.email" type="email" class="form-control" placeholder="Enter Name.">
                                </div>
                                @error('form.email')
                                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $message }}</li></ul>
                                @enderror
                            </div>

                            <div class="form-group mt-4">
                                <label class="form-control-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="lock"></i>
                                                        </span>
                                    </div>
                                    <input wire:model.defer="form.password" type="password" class="form-control" placeholder="Enter Password.">
                                </div>
                                @error('form.password')
                                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $message }}</li></ul>
                                @enderror
                            </div>
                            <div class="form-group mt-4">
                                <label class="form-control-label">Confirm Password</label>
                                <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="lock"></i>
                                                        </span>
                                    </div>
                                    <input wire:model.defer="form.password_confirmation" type="password" class="form-control" placeholder="Enter Confirm Password.">
                                </div>
                                @error('password_confirmation')
                                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">{{ $message }}</li></ul>
                                @enderror
                            </div>
                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit"> Register
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end card-body -->
            </div>
            <!-- end card -->
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <p class="text-muted">Already have an account? <a href="{{ route('login') }}" class="text-primary fw-bold ms-1">Login</a></p>
                </div> <!-- end col -->
            </div>
        </div> <!-- end col -->
    </div>
</div>
