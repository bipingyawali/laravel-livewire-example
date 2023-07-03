<!DOCTYPE html>
<html lang="en">
@include('layouts.partial.main._head')

<body>
<!-- Begin page -->
<div id="wrapper">

    @include('layouts.partial.main._navbar')

    @include('layouts.partial.main._sidebar')

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row page-title align-items-center">
                    <div class="col-sm-4 col-xl-6">
                        <h4 class="mb-1 mt-0">@yield('page_title')</h4>
                    </div>
                </div>

                @yield('content')

            </div>
        </div> <!-- content -->



        @include('layouts.partial.main._footer')

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    @include('layouts.partial.main._modal')
</div>
<!-- END wrapper -->

@include('layouts.partial.main._script')


</body>
</html>
