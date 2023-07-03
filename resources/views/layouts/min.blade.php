<!DOCTYPE html>
<html lang="en">
@include('layouts.partial.min.head')
<body class="authentication-bg">

<div class="account-pages my-5">
    <div class="container">
        @yield('content')
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->

@livewireScripts

@include('layouts.partial.min.scripts')


</body>
</html>
