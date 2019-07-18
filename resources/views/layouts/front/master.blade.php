<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.front._head')
</head>

<body>
<!-- Header Start -->
<header class="navigation-bar">
    <div class="container-fluid">
        @include('layouts.front._navbar')
    </div>
</header>
<!-- Header End -->
<!-- Start Modals -->
    @yield('content')
<!-- End -->
<!-- Footer Start -->
<footer id="footer">
    @include('layouts.front._footer')
</footer>
<!-- End -->

@include('layouts.front._scripts')

@stack('library-js')
@stack('custom-js')


</body>
</html>