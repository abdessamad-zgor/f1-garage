<!DOCTYPE html>
<html>
<head>
@vite('resources/css/app.css')
    <title>F1 Garage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body class="bg-zinc-200">

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel mb-4">
    <div class="container flex flex-row justify-between">
        <a class="text-2xl" href="/">F1 Garage</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="flex gap-2" id="navbarSupportedContent">
            @if(Auth::check())
                <h4 class="text-gray-500 text-sm font-light">{{Auth::user()->name}}</h4>
                <a class="w-[30px] h-[30px] text-center" href="/logout">
                    @component('components.icon',['name'=>'logout'])
                    @endcomponent
                </a>
            @endif
        </div>
    </div>
</nav>
    @yield('content')
</body>
</html>
