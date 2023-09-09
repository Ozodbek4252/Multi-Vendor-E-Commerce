<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    @include('frontend.dashboard.layouts.links')
</head>

<body>

    @include('frontend.dashboard.layouts.navbar')

    <section id="wsus__dashboard">
        <div class="container-fluid">
            @include('frontend.dashboard.layouts.sidebar')
            @yield('content')
        </div>
    </section>

    <div class="wsus__scroll_btn">
        <i class="fas fa-chevron-up"></i>
    </div>


    @include('frontend.dashboard.layouts.scripts')
</body>

</html>
