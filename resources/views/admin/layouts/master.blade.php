<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>General Dashboard &mdash; Stisla</title>

    @include('admin.layouts.links')

    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('admin.layouts.navbar')
            @include('admin.layouts.sidebar')


            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>

            @include('admin.layouts.footer')
        </div>
    </div>

    @include('admin.layouts.scripts')
</body>

</html>
