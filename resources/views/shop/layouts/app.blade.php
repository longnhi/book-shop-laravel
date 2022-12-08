<!DOCTYPE html>
<html lang="zxx">
@include('shop.layouts.head')

<body>
    @include('shop.layouts.header')

    @yield('content')

    @include('shop.layouts.footer')

    <!-- Js Plugins -->
    <script src="{{asset('templates/shop/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('templates/shop/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('templates/shop/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('templates/shop/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('templates/shop/js/mixitup.min.js')}}"></script>
    <script src="{{asset('templates/shop/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('templates/shop/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('templates/shop/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('templates/shop/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('templates/shop/js/main.js')}}"></script>
</body>

</html>