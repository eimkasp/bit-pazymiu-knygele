<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <link href="{{ asset('styles/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('styles/app.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

    <script src="{{ asset('app.js') }}"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('students.create') }}">{{ __('Sukurti studenta') }}</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @if(Session::has('status'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                {{ Session::get('status') }}
                            </p>
                        @endif
                    </div>
                </div>
            </div>

            <!-- HEADER -->
            <div class="header">
                <div class="container">
                    <!-- Body -->
                    <div class="header-body">
                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-lg avatar-4by3">
                                    <img src="http://bit.lt/wp-content/themes/baltictalents/img/BIT_logo_desktop.svg" alt="..." class="avatar-img rounded">
                                </div>

                            </div>
                            <div class="col ml-n3 ml-md-n2">

                                <!-- Pretitle -->
                                <h6 class="header-pretitle">
                                    BIT
                                </h6>

                                <!-- Title -->
                                <h1 class="header-title">
                                    Pažymiu knygele
                                </h1>

                            </div>
                            <div class="col-12 col-md-auto mt-3 mt-md-0">

                            </div>
                        </div> <!-- / .row -->
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Nav -->
                                <ul class="nav nav-tabs nav-overflow header-tabs">
                                    <li class="nav-item">
                                        <a href="{{ route('students.index') }}" class="nav-link active">
                                            {{ __("Studentų sąrašas") }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('students.create') }}" class="nav-link">
                                            {{ __("Pridėti studentą") }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('lectures.index') }}" class="nav-link">
                                            {{ __("Paskaitos") }}
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

                </div>
            </div> <!-- / .header -->
            @yield('content')
        </main>


        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="list-group list-group-flush list-group-activity my-n3">
                            <div class="list-group-item">
                                @for($i = 0; $i < 5; $i++)
                                    <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <div class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                                                <i class="fe fe-mail"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col ml-n2">

                                        <!-- Heading -->
                                        <h5 class="mb-1">
                                            Launchday 1.4.0 update email sent
                                        </h5>

                                        <!-- Text -->
                                        <p class="small text-gray-700 mb-0">
                                            Sent to all 1,851 subscribers over a 24 hour period
                                        </p>

                                        <!-- Time -->
                                        <small class="text-muted">
                                            2m ago
                                        </small>

                                    </div>
                                </div> <!-- / .row -->
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
    </div>
    <link rel="stylesheet" type="text/css"
          href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
    <script>
        window.addEventListener("load", function () {
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#000000"
                    },
                    "button": {
                        "background": "#c4b257"
                    }
                },
                "theme": "classic",
                "content": {
                    "message": "Informuojame, kad šioje svetainėje naudojami slapukai (ang.) cookies. Sutikdami, paspauskite mygtuką “Sutinku” arba naršykite toliau. Savo duotą sutikimą bet kada galėsite atšaukti pakeisdami savo interneto naršyklės nustatymus ir ištrindami įrašytus slapukus.",
                    "href": "/privatumo-politika",
                    "dismiss": "Sutinku",
                    "link": "Daugiau informacijos"

                }
            })
        });
    </script>

</body>
</html>
