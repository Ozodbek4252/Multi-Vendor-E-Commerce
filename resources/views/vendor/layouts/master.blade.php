<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />

    @include('vendor.layouts.links')
</head>

<body>

    @include('vendor.layouts.navbar')

    <section id="wsus__dashboard">
        <div class="container-fluid">
            @include('vendor.layouts.sidebar')
            @yield('content')
        </div>
    </section>

    <div class="wsus__scroll_btn">
        <i class="fas fa-chevron-up"></i>
    </div>


    @include('vendor.layouts.scripts')
</body>

</html>
