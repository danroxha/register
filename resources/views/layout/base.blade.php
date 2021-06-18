<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ config('app.name')}} - @yield('title') </title>
    <link rel="stylesheet" href='{{ asset("asset/css/reset.css") }}'/>
    <link rel="stylesheet" href='{{ asset("asset/css/base.css") }}'/>
</head>
<body>
    <section class='container'>
        <header class='base-header'>
            <img class='logo'src='{{ asset("asset/img/logo.png") }}' alt='logo' />
            <h1> {{ config('app.name') }}</h1>
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
