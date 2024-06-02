<!DOCTYPE html>
<html>
<head>
@vite('resources/css/app.css')
    <title>Laravel - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body class="bg-zinc-200">

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel mb-4">
    <div class="container">
        <a class="text-2xl" href="#">Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

            </ul>

        </div>
    </div>
</nav>
    @yield('content')
</body>
</html>
