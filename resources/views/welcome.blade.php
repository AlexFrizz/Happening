<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap 5.3 css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">

    <!-- icon-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Styles -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Happening</title>
  </head>
<body>
<div class="video-background">
  <video autoplay loop muted plays-inline class="video">
    <source src="{{ asset('assets/bg-vid1.mp4') }}" type="video/mp4">
  </video>



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
        <li class="nav-list account">
          <a href="#account">
            <span class="nav-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"><path d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z" fill="rgba(224,251,252,1)"></path></svg>
            </span>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <section id="landing" class="section-padding">
    <div class="panel-container mt-5">
      <div class="panel glass">
        <div class="grid-container">
          <div class="row ">
            <div class="col-12">
              <div class="title-container px-4">
                <h1 class="title">WHAT'S <br></be><span class="mt-5 mb-5">HAPPENING</span><br>TODAY IN</h1>

                <div class="box">
                  <form name="search" method="get" action="#">
                    <input type="text" class="input" name="txt">
                    <i class="fas fa-search"></i>
                  </form>
                </div>
              </div>
            </div>

            <div class="col">

              <div class="img-container">
                <img src="{{ asset('assets/photo-removebg.png') }}" class="bg-img">
              </div>

{{--              <div id="carouselExampleAutoplaying" class="carousel slide px-4 carousel-fade" data-bs-ride="carousel">--}}
{{--                <div class="carousel-inner">--}}
{{--                  <div class="carousel-item active c-item">--}}
{{--                    <img src="{{ asset('assets/friends2.jpg') }}" class="d-block w-100 c-img" alt="friends2">--}}
{{--                  </div>--}}
{{--                  <div class="carousel-item c-item">--}}
{{--                    <img src="{{ asset('assets/friends3.jpg') }}" class="d-block w-100 c-img" alt="friends3">--}}
{{--                  </div>--}}
{{--                  <div class="carousel-item c-item">--}}
{{--                    <img src="{{ asset('assets/party2.jpg') }}" class="d-block w-100 c-img" alt="...">--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">--}}
{{--                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                  <span class="visually-hidden">Previous</span>--}}
{{--                </button>--}}
{{--                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">--}}
{{--                  <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                  <span class="visually-hidden">Next</span>--}}
{{--                </button>--}}
{{--              </div>--}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="event" class="section-padding">
    <div class="panel-container">
      <div class="row">
        <div class="col-6">
          <h3 class="tit">Recently Added:</h3>
        </div>
        <div class="col-6 text-right">
          <a class="btn btn-primary mr-1" href="#CarouselSlide" role="button" data-slide="prev">
            <i class="fa fa-arrow-left"></i>
          </a>
          <a class="btn btn-primary" href="#CarouselSlide" role="button" data-slide="next">
            <i class="fa fa-arrow-right"></i>
          </a>
        </div>
        <div class="col-12 car">
          <div id="CarouselSlide" class="carousel slide" data-ride="">

            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  @foreach($events as $event)
                   <div class="col-md-3 mb-3">
                      <div class="card">
                        <img class="img-fluid" alt="100%x280" src="{{ asset('assets/card1.jpg') }}">
                        <div class="card-body">
                          <h4 class="card-title">{{ $event['title'] }}</h4>
                          <p class="card-text">{{ $event['description'] }}</p>
                        </div>
                        <div class="content">

                        </div>
                      </div>
                    </div>
                  @endforeach

                  <div class="col-md-3 mb-3">
                    <div class="card">
                      <img class="img-fluid card__image" alt="100%x280" src="{{ asset('assets/card1.jpg') }}">
                      <div class="card__overlay">
                        <div class="card__header">
                          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                          <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__status">1 hour ago</span>
                          </div>
                        </div>
                        <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                      </div>
                    </div>
                  </div>
{{--                  <div class="col-md-3 mb-3">--}}
{{--                    <div class="card">--}}
{{--                      <img class="img-fluid" alt="100%x280" src="{{ asset('assets/card2.jpg') }}">--}}
{{--                      <div class="card-body">--}}
{{--                        <h4 class="card-title">Special title treatment</h4>--}}
{{--                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="col-md-3 mb-3">--}}
{{--                    <div class="card">--}}
{{--                      <img class="img-fluid" alt="100%x280" src="{{ asset('assets/card3.jpg') }}">--}}
{{--                      <div class="card-body">--}}
{{--                        <h4 class="card-title">Special title treatment</h4>--}}
{{--                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="col-md-3 mb-3">--}}
{{--                    <div class="card">--}}
{{--                      <img class="img-fluid" alt="100%x280" src="{{ asset('assets/card4.jpg') }}">--}}
{{--                      <div class="card-body">--}}
{{--                        <h4 class="card-title">Special title treatment</h4>--}}
{{--                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}

{{--              <div class="carousel-item">--}}
{{--                <div class="row">--}}

{{--                  <div class="col-md-3 mb-3">--}}
{{--                    <div class="card">--}}
{{--                      <img class="img-fluid" alt="100%x280" src="{{ asset('assets/card5.jpg') }}">--}}
{{--                      <div class="card-body">--}}
{{--                        <h4 class="card-title">Special title treatment</h4>--}}
{{--                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="col-md-3 mb-3">--}}
{{--                    <div class="card">--}}
{{--                      <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">--}}
{{--                      <div class="card-body">--}}
{{--                        <h4 class="card-title">Special title treatment</h4>--}}
{{--                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="col-md-3 mb-3">--}}
{{--                    <div class="card">--}}
{{--                      <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">--}}
{{--                      <div class="card-body">--}}
{{--                        <h4 class="card-title">Special title treatment</h4>--}}
{{--                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="col-md-3 mb-3">--}}
{{--                    <div class="card">--}}
{{--                      <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">--}}
{{--                      <div class="card-body">--}}
{{--                        <h4 class="card-title">Special title treatment</h4>--}}
{{--                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>

{{--  JavaScript --}}
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script type="text/javascript" src="{{ URL::asset('assets/js/app.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/script.js') }}"></script>

</body>
</html>
