<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
        name="viewport"
    />
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <title>@yield('title')</title>

    {{--Style--}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
</head>

<body>

<!--page content-->
@yield('content')
<!--end page content-->

<!--footer-->
@include('includes.footer')
<!--end footer-->
<!-- Script -->
@stack('prepend-script')
@include('includes.script')
@stack('addon-script')
</body>
</html>
