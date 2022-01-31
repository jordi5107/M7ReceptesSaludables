<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">

    <!-- <link rel="stylesheet" href="./css/app.css"> -->
    <link rel="stylesheet" href=" {{ URL::asset('css/style.css'); }}">
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('css/img/icon.png'); }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    
</head>

<body>

    <header class="p-3 bg-danger border-bottom">

        <!-- <div class="container"> -->

        <nav class="navbar navbar-expand-lg navbar-dark ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                <ul class="navbar-nav">

                    <li>
                        <a href="{{route('categories.home')}}" class="nav-link px-2 link-dark">Categories</a>
                    </li>
                    <li>
                        <b><a href="/" class="nav-link px-2 text-dark">Directe al gust</a></b>
                    </li>
                    <div class="dropdown text-end">

                        @if (Auth::check())
                        <a href="#" class=" nav-link  d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://i.pinimg.com/originals/0c/3b/3a/0c3b3adb1a7530892e55ef36d3be6cb8.png" alt="mdo" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                            @if(Auth::user()->current_team_id == 1)
                            <li><a class="dropdown-item" href="{{route('login')}}">Accedeix al gestor de contingut</a></li>
                            @endif
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        Tancar sessió
                                    </a>


                                </form>
                            <li>
                        </ul>
                        @else
                        <a href="#" class=" nav-link  d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            usuaris
                        </a>
                        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                            <li>
                                <a class="dropdown-item" href="{{route('login')}}">Iniciar sessió</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('register')}}">Registrarse</a>
                            </li>
                        </ul>
                       
                        @endif

                    </div>
                </ul>
            </div>
            </div>
    </header>
    <main>

        @yield('content')

    </main>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 mb-auto border-top bg-dark">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <span class="text-muted">© 2021 Reus</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="#">instagram</a></li>
            <li class="ms-3"><a class="text-muted" href="#">facebook</a></li>
            <li class="ms-3"><a class="text-muted" href="#">twitter</a></li>
        </ul>
    </footer>

</body>

</html>