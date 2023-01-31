<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      <nav class="navbar navbar-default navbar-static-top">

            <div class="container">
            <div class="navbar-header">


            <a class="navbar-brand" href="{{ url('/') }}">
                    VadeTronic
            </a>
            <a class="navbar-brand" href="{{ url('/home') }}">
                   /talo
            </a>
           </div>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">

					<!-- Left Side Of Navbar -->
					<ul class="nav navbar-nav">

					<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Demotoiminot <span class="caret"></span></a>
					<ul class="dropdown-menu" aria-labelledby="download">
					<li><a href="{{ url('/users') }}">Opiskelijalista</a></li>
					<li class="divider"></li>
					<li><a href="{{ url('/harkat') }}">Harkkapalautukset</a></li>
					<li class="divider"></li>
					<li><a href="{{ url('/pscores') }}">Mun pistelauta</a></li>
					<li class="divider"></li>
					<li><a href="{{ url('/upload') }}">Lataa CSV</a></li>
					<li class="divider"></li>
					<li><a href="{{ url('/changePassword') }}">Vaihda salasana</a></li>

					</ul>
					</li>
					</ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Lokin') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Rekister') }}</a>
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
            @yield('content')
        </main>
    </div>
</body>
</html>