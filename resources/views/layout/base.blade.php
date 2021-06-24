<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ config('app.name')}} - @yield('title') </title>
    <link rel="stylesheet" href='{{ asset("asset/css/base.css") }}'/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
<body>
    <section class='container'>
        <header class='base-header'>
            <img class='logo'src='{{ asset("asset/img/logo.png") }}' alt='logo' />
            <h1 class='fs-1"'> {{ config('app.name') }}</h1>
        </header>

        <main class='base-content'>
            @yield('content')
        </main>

        <footer class='base-footer'>
            @2021 By Daniel
        </footer>
    </section>
</body>
</html>
