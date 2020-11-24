<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('includes.user.style')
    <!-- CSS -->
</head>

<body>
    <!-- Sidebar -->
    @include('includes.psikolog.sidebar_psikolog')
    <!-- End Sidebar -->

    <!-- Content-->
    @yield('content')
    <!--End Content-->

</body>
<footer>
    @include('includes.psikolog.sidebar_psikolog')
</footer>

</html>
