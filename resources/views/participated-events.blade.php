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

          <!-- PULSANTE HOME -->
            <a href="/">

            <span class="nav-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"><path d="M21 19.9997C21 20.552 20.5523 20.9997 20 20.9997H4C3.44772 20.9997 3 20.552 3 19.9997V9.48882C3 9.18023 3.14247 8.88893 3.38606 8.69947L11.3861 2.47725C11.7472 2.19639 12.2528 2.19639 12.6139 2.47725L20.6139 8.69947C20.8575 8.88893 21 9.18023 21 9.48882V19.9997ZM19 18.9997V9.97791L12 4.53346L5 9.97791V18.9997H19Z" fill="rgba(224,251,252,1)"></path></svg>
            </span>
            </a>
          </li>
          <li class="nav-list">
            <a href="/#search">
            <span class="nav-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"><path d="M11 2C15.968 2 20 6.032 20 11C20 15.968 15.968 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2ZM11 18C14.8675 18 18 14.8675 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18ZM19.4853 18.0711L22.3137 20.8995L20.8995 22.3137L18.0711 19.4853L19.4853 18.0711Z" fill="rgba(224,251,252,1)"></path></svg>
            </span>
            </a>
          </li>
          <li class="nav-list">
            <a href="/#create">
            <span class="nav-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"><path d="M11 11V7H13V11H17V13H13V17H11V13H7V11H11ZM12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20Z" fill="rgba(224,251,252,1)"></path></svg>
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
**************************************************************
<section id="event" class="section-padding">
    <div class="panel-container">
      <div class="row row-panel">
        <div class="col-6">
          <h2 class="greeting">{{ Auth::user()->name }} {{ Auth::user()->surname }},below you will find the events you are subscribed to.</h2>
        </div>
        <div class="col-6 text-right">
          <a class="btn btn-carousel mr-1" href="#CarouselSlide" role="button" data-slide="prev">
            <i class="fa fa-arrow-left"></i>
          </a>
          <a class="btn btn-carousel" href="#CarouselSlide" role="button" data-slide="next">
            <i class="fa fa-arrow-right"></i>
          </a>
        </div>
        <div class="col-12 car">
          <div id="CarouselSlide" class="carousel slide" data-ride="">

            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row row-carousel">
                  @foreach ($eventsParticipated as $event)
                  <div class="col-md-3 mb-3">
                    <div class="card glass ">
                      <img class="img-fluid" alt="" src="{{ asset('assets/Immagini/' . $event->image) }}">
                      <div class="card-body">
                        <h4 class="card-title">{{ $event['title'] }}</h4>
                        <p class="card-text">{{ $event['description'] }}</p>
                        <hr>
                        <div class="info">
                          <div class="row row-info">
                            <div class="col-1">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364L12 23.7279ZM16.9497 15.9497C19.6834 13.2161 19.6834 8.78392 16.9497 6.05025C14.2161 3.31658 9.78392 3.31658 7.05025 6.05025C4.31658 8.78392 4.31658 13.2161 7.05025 15.9497L12 20.8995L16.9497 15.9497ZM12 13C10.8954 13 10 12.1046 10 11C10 9.89543 10.8954 9 12 9C13.1046 9 14 9.89543 14 11C14 12.1046 13.1046 13 12 13Z" fill="rgba(224,251,252,1)"></path></svg>
                            </div>
                            <div class="col">
                              <p class="card-info">{{ $event['city'] }}, {{ $event['address'] }}, {{ $event['location'] }}</p>
                            </div>
                          </div>
                          <div class="row row-info">
                            <div class="col-1">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM11 13V17H6V13H11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z" fill="rgba(224,251,252,1)"></path></svg>                              </div>
                            <div class="col">
                              <p class="card-info">{{ $event['date'] }}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer glass">
                      <div class="btn-container">
                        <div class="row row-icon fixed-bottom">
                          <div class="card-btn d-flex justify-content-between ">
                            <a href="{{ route('unsubscribe', $event ->id) }}"  class="icon-join card-icon ms-5">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="white"><path d="M14 14.252V16.3414C13.3744 16.1203 12.7013 16 12 16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM19 17.5858L21.1213 15.4645L22.5355 16.8787L20.4142 19L22.5355 21.1213L21.1213 22.5355L19 20.4142L16.8787 22.5355L15.4645 21.1213L17.5858 19L15.4645 16.8787L16.8787 15.4645L19 17.5858Z"></path></svg>
                            </a>
                            <a href="{{ route('info', $event->id) }}" class="icon-comment card-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path d="M5.76282 17H20V5H4V18.3851L5.76282 17ZM6.45455 19L2 22.5V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V18C22 18.5523 21.5523 19 21 19H6.45455Z" fill="rgba(224,251,252,1)"></path></svg>
                            </a>
                            <a href="#xx" class="icon-share card-icon me-5">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path d="M13.1202 17.0228L8.92129 14.7324C8.19135 15.5125 7.15261 16 6 16C3.79086 16 2 14.2091 2 12C2 9.79086 3.79086 8 6 8C7.15255 8 8.19125 8.48746 8.92118 9.26746L13.1202 6.97713C13.0417 6.66441 13 6.33707 13 6C13 3.79086 14.7909 2 17 2C19.2091 2 21 3.79086 21 6C21 8.20914 19.2091 10 17 10C15.8474 10 14.8087 9.51251 14.0787 8.73246L9.87977 11.0228C9.9583 11.3355 10 11.6629 10 12C10 12.3371 9.95831 12.6644 9.87981 12.9771L14.0788 15.2675C14.8087 14.4875 15.8474 14 17 14C19.2091 14 21 15.7909 21 18C21 20.2091 19.2091 22 17 22C14.7909 22 13 20.2091 13 18C13 17.6629 13.0417 17.3355 13.1202 17.0228ZM6 14C7.10457 14 8 13.1046 8 12C8 10.8954 7.10457 10 6 10C4.89543 10 4 10.8954 4 12C4 13.1046 4.89543 14 6 14ZM17 8C18.1046 8 19 7.10457 19 6C19 4.89543 18.1046 4 17 4C15.8954 4 15 4.89543 15 6C15 7.10457 15.8954 8 17 8ZM17 20C18.1046 20 19 19.1046 19 18C19 16.8954 18.1046 16 17 16C15.8954 16 15 16.8954 15 18C15 19.1046 15.8954 20 17 20Z" fill="rgba(224,251,252,1)"></path></svg>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach

            </div>
          </div>
        </div>
      </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        </div>
      </div>
    </div>
  </section>

**************************************************************

    <main class="py-4">

      @yield('content')
    </main>
  </div>
</div>

</body>
</html>
