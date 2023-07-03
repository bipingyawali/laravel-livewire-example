<!-- Vendor js -->
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/js/app.min.js') }}"></script>

<script src="{{ asset('assets/sweetalert2/dist/sweetalert2.min.js') }}"></script>
<script>
    $(document).ready(function (){
        swalWithBootstrapButtons = swal.mixin({
            confirmButtonClass: 'btn btn-success btn-rounded',
            cancelButtonClass: 'btn btn-danger btn-rounded mr-3',
            buttonsStyling: false,
        });
        window.addEventListener('swal:confirm', event => {
            swalWithBootstrapButtons({
                title: event.detail.title || 'Are you sure ???',
                text: event.detail.text || "Once deleted, you will not be able to recover this data!",
                type: event.detail.type || 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true,
                padding: '2em'
            }).then((result) => {
                if (result.value) {
                    window.livewire.emit('delete',event.detail.id)
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        });
        window.addEventListener('swal:success', event => {
            swalWithBootstrapButtons(
                event.detail.title || '',
                event.detail.text || 'Saved!',
                'success'
            )
        });
        window.addEventListener('swal:error', event => {
            swalWithBootstrapButtons(
                event.detail.title || 'Oops...',
                event.detail.text || 'Something went wrong!',
                'error'
            )
        });
    })
</script>

<livewire:scripts />
@stack('scripts')
