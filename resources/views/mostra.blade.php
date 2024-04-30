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
          <h2 class="greeting">{{ Auth::user()->name }} {{ Auth::user()->surname }},below you will find your created events</h2>
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
                  @foreach($events as $event)
                   @if(Auth::user()->is_admin == 1 || Auth::user()->id == $event['user_id'])
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
                           <!-- Pulsante cancella-->
                           <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="icon-join card-icon ms-5">
                             @csrf
                             @method('DELETE')
                             <button type="submit" class="btn" onclick="return confirm('Are you sure you want to delete this event?')">
                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="white"><path d="M17 6H22V8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8H2V6H7V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V6ZM18 8H6V20H18V8ZM9 11H11V17H9V11ZM13 11H15V17H13V11ZM9 4V6H15V4H9Z"></path></svg>
                               </button>
                             </form>
                             <!-- Pulsante H-->
                             <a href="#" class="icon-comment card-icon">
                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="white"><path d="M17 11V4H19V21H17V13H7V21H5V4H7V11H17Z"></path></svg>
                             </a>
                             <!-- Pulsante modifica-->
                             <a href="{{ route('events.modify', $event->id) }}" class="icon-share card-icon me-5">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="white"><path d="M15.7279 9.57627L14.3137 8.16206L5 17.4758V18.89H6.41421L15.7279 9.57627ZM17.1421 8.16206L18.5563 6.74785L17.1421 5.33363L15.7279 6.74785L17.1421 8.16206ZM7.24264 20.89H3V16.6473L16.435 3.21231C16.8256 2.82179 17.4587 2.82179 17.8492 3.21231L20.6777 6.04074C21.0682 6.43126 21.0682 7.06443 20.6777 7.45495L7.24264 20.89Z"></path></svg>
                             </a>
                           </div>
                         </div>
                       </div>
                     </div>
                    </div>
                    @endif
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
