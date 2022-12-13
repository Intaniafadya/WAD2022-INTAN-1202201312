<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My Css -->
    <link rel="stylesheet" href="../assets/styles/index.css">

    <title>{{ $title }}</title>
</head>

<body>
    <header>
        @section('navbar')
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class={{ $active == 'home' ? 'nav-link active' : 'nav-link' }}
                                    href={{ route('home') }}>Home</a>
                            </li>
                            <li class="nav-item">
                                <a class={{ $active == 'rent' ? 'nav-link active' : 'nav-link' }}
                                    href={{ route('rent') }}>MyCar</a>
                            </li>
                        </ul>
                    </div>
                    @auth
                        <div class="login">
                            <a href={{ route('rent.add') }} class="btn btn-light text-primary">Add Car</a>
                            <a class="btn btn-light text-primary dropdown-toggle" href="#" role="button"
                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href={{ route('profile') }}>profile</a>
                                <a class="dropdown-item" href={{ route('logout') }}>logout</a>
                            </div>
                        </div>
                    @endauth
                    @guest
                        <div class="login">
                            <a href={{ route('login') }} class="btn btn-light text-primary">Login</a>
                        </div>
                    @endguest

                </div>
            </nav>
        </header>

        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>

    </body>

    </html>
