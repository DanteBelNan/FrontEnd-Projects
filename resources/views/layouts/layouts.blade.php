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
        <form action="{{ route('home.index')}}" method="post" id="adminPanel">
            <button type="submit" class="navbar-button">Home</button>
        </form>

        @yield('navbar')   
    </nav>
    @yield('content')

    <!-- footer -->

    <!-- script -->
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>