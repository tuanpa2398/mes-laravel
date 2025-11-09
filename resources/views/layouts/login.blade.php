<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'MES')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/toastify.min.css') }}">
    <link href="{{ asset('assets/boostrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/index.css') }}" rel="stylesheet">
</head>

<body>
    <div class="" style="background: linear-gradient(180deg,#eaeaed 10%,#e7e7ee 40%,#dedee9,#ced0e2)">
        @yield('content')
    </div>

    <script src="{{ asset('assets/boostrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/toastify.js') }}"></script>
    @if(session('success'))
        <script>
            Toastify({
                text: "{{ session('success') }}",
                duration: 3000,
                gravity: "top",
                position: "center",
                backgroundColor: "#16a34a",
                stopOnFocus: true,
            }).showToast();
        </script>
    @endif

    @if(session('error'))
        <script>
            Toastify({
                text: "{{ session('error') }}",
                duration: 3000,
                gravity: "top",
                position: "center",
                backgroundColor: "#dc2626",
                stopOnFocus: true,
            }).showToast();
        </script>
    @endif
</body>

</html>