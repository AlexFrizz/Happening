<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap 5.3 css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!--remix icon-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Happening</title>
  </head>
<body class="bg-img">

  <nav class="navbar navbar-expand-md fixed-top mx-5 mt-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">HAPPENING.</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent text">
        <ul class="navbar-nav m-auto gap-4" id="text">
          <li class="nav-item line">
            <a id="home" class="nav-link word fancy" href="#home">HOME</a>
          </li>
          <li class="nav-item line">
            <a id="explore" class="nav-link word fancy" href="#explore">EXPLORE</a>
          </li>
          <li class="nav-item line">
            <a id="create" class="nav-link word fancy" href="#create">CREATE</a>
          </li>
          <li class="nav-item line">
            <a id="search" class="nav-link word fancy" href="#search">SEARCH</a>
          </li>
        </ul>
        <ul class="navbar-nav flex-row">
          <li class="nav-item-account">
            <div class="btn-container">
              <a class="btn btn-brand" href="#" role="button">ACCOUNT</a>

            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>



{{--  JavaScript --}}
<script type="text/javascript" src="{{ URL::asset('assets/js/app.js') }}"></script>
</body>
</html>
