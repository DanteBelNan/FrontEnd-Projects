<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dante Beltran</title>

    <!--favicon -->

    <!-- estilos -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

</head>
<body>
    <!-- header -->

    <!-- nav -->
    <nav class="navbar">
        <a class="" href="{{ route('home.index') }}">Home</a>

        @yield('navbar')   
    </nav>
    @yield('content')

    <!-- footer -->

    <!-- script -->
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>