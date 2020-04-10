<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Document</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            {{-- <a class="navbar-brand" href='#'>Supply NZ</a> --}}
            <a class="navbar-brand" href="{{ route('foodProviders.index')}}">Supply NZ</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link" href="{{ route('foodProviders.create')}}">Add Provider</a>
                </div>
            </div>
        </nav>

    @yield('content')

    @if(session()->has('status'))
        <div class="container">
            <div class="alert alert-success" role="alert">
                {{ session()->get('status') }}          
            </div>
        </div>
    @endif
    <script scs="{{ mix('js/app.js') }}"></script>
</body>
</html>