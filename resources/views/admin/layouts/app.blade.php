<!doctype html>
<html lang="en">
    @include('admin.layouts.head')
    <body class="vertical  light  ">
        <div class="wrapper">
            @include('admin.layouts.header')
            @include('admin.layouts.sidebar')
            <main role="main" class="main-content">
                @yield('content')
            </main> <!-- main -->
        </div> <!-- .wrapper -->
        
        @include('admin.layouts.footer')
    </body>
</html>