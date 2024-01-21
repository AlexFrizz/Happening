<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

  <!-- Style -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

  <!-- Scripts -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="video-background">
  <video autoplay loop muted plays-inline class="video">
    <source src="{{ asset('assets/bg-vid1.mp4') }}" type="video/mp4">
  </video>
  <div id="app">


    <div class="sidebar">
      <div class="navigation glass mt-2">
        <div class="logo">
          <h1>h.</h1>
        </div>
        <ul>
          <li class="nav-list">
            <a href="#event">
            <span class="nav-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"><path d="M21 19.9997C21 20.552 20.5523 20.9997 20 20.9997H4C3.44772 20.9997 3 20.552 3 19.9997V9.48882C3 9.18023 3.14247 8.88893 3.38606 8.69947L11.3861 2.47725C11.7472 2.19639 12.2528 2.19639 12.6139 2.47725L20.6139 8.69947C20.8575 8.88893 21 9.18023 21 9.48882V19.9997ZM19 18.9997V9.97791L12 4.53346L5 9.97791V18.9997H19Z" fill="rgba(224,251,252,1)"></path></svg>
            </span>
            </a>
          </li>
          <li class="nav-list">
            <a href="#search">
            <span class="nav-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"><path d="M11 2C15.968 2 20 6.032 20 11C20 15.968 15.968 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2ZM11 18C14.8675 18 18 14.8675 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18ZM19.4853 18.0711L22.3137 20.8995L20.8995 22.3137L18.0711 19.4853L19.4853 18.0711Z" fill="rgba(224,251,252,1)"></path></svg>
            </span>
            </a>
          </li>
          <li class="nav-list">
            <a href="#create">
            <span class="nav-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"><path d="M11 11V7H13V11H17V13H13V17H11V13H7V11H11ZM12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20Z" fill="rgba(224,251,252,1)"></path></svg>
            </span>
            </a>
          </li>
          <li class="nav-item dropdown nav-list account">
            <a id="navbarDropdown" class="nav-link dropdown-toggle account-name" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name[0] }}
            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <a class="dropdown-item account-logout" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <section id="profile" class="section-padding">
      <div class="panel-container mt-5">
        <div class="panel glass">
          <div class="profile-container">
            <div class="row name-row d-flex text-center">
              <h2 class="greeting"><span>Welcome</span>, {{ Auth::user()->name }} {{ Auth::user()->surname }}!</h2>
              <p class="profile-description">each event is a unique chapter in your life story</p>
            </div>
            <div class="row row-stats">
              <div class="stats-container">
                <div class="col col-stats d-flex justify-content-evenly">
                  <div class="event-container glass">
                    <h3 class="event-title">Created Events</h3>
                    <p class="stats"></p>
                  </div>
                </div>
                <div class="col col-stats d-flex justify-content-evenly">
                  <div class="event-container glass">
                    <h3 class="event-title">Experienced Events</h3>
                  </div>
                </div>
                <div class="col col-stats d-flex justify-content-evenly">
                  <div class="event-container glass">
                    <h3 class="event-title">Events Participation</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <main class="py-4">
      @yield('content')
    </main>
  </div>
</div>
</body>
</html>
