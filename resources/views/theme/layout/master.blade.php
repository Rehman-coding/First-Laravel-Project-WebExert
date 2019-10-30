<!doctype html>
<html lang="en" class="material-style layout-fixed">

<head>
    @php $setting = \App\Settings::pluck('value','name')->toArray();@endphp
    @include('theme.partial.head');

    <title>Document</title>

</head>
<body>
<!-- [ Preloader ] Start -->
<div class="page-loader">
    <div class="bg-primary"></div>
</div>
<!-- [ Preloader ] End -->

<!-- [ Layout wrapper ] Start -->


<div class="layout-wrapper layout-2">
    <div class="layout-inner">
     @include('theme.partial.sidebar');
        <!-- [ Layout sidenav ] End -->
        <!-- [ Layout container ] Start -->
        <div class="layout-container">
            @include('theme.partial.navbar');
            <div class="layout-content">
                @yield('content');
                @include('theme.partial.footer');
            </div>
        </div>
         </div>
        </div>

@include('theme.partial.script');
</body>
</html>