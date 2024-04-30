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

<section id="create" class="section-padding">
    <div class="row row-preview">
      <div class="panel-container1">
        <div class="panel1 glass">
          <div class="row row-create">
            <div class="col col-form">
              <div class="row row-title">
                <div class="create-title">
                  <h3 class="d-flex justify-content-center title-section">Let's <span> create </span> an happening</h3>
                  <p class="create-description d-flex justify-content-center">just enter some information</p>
                </div>
              </div>
              <form method="POST" action="{{ route('events.update', $evento->id) }}" enctype="multipart/form-data" id="update-event-form">
    @csrf
    @method('PUT')

    <div class="row row-form1">
        <div class="col-6">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control glass form-control-lg live-preview-input" id="input-title" placeholder="What's the title?" name="title" value="{{ $evento->title }}">
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="formFileLg" class="form-label">Image</label>
                <input class="form-control glass form-control-lg img-form" id="imageName" type="file" name="image" placeholder="Nothing selected">
                <input type="hidden" name="image_name" id="imageName">
                <input type="hidden" name="image" id="image-path">
            </div>
        </div>
    </div>

    <div class="row row-form2">
        <div class="col">
            <div class="mb-3">
                <label for="htmlInput" class="form-label">Description</label>
                <textarea name="description" class="form-control glass form-control-lg" id="input-description" rows="3" placeholder="Tell us something about...">{{ $evento->description }}</textarea>
            </div>
        </div>
    </div>

    <div class="row row-form3">
        <div class="col-6">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">City</label>
                <input type="text" class="form-control glass form-control-lg" id="input-city" placeholder="In which city?" name="city" value="{{ $evento->city }}">
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Address</label>
                <input type="text" class="form-control glass form-control-lg" id="input-address" placeholder="To which address?" name="address" value="{{ $evento->address }}">
            </div>
        </div>
    </div>

    <div class="row row-form4">
        <div class="col-6">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Location</label>
                <input type="text" class="form-control glass form-control-lg" id="input-location" placeholder="At which location?" name="location" value="{{ $evento->location }}">
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Date</label>
                <input type="date" class="form-control glass form-control-lg" id="input-date" placeholder="On which date?" name="date" value="{{ $evento->date }}">
            </div>
        </div>
    </div>

    <div class="row row-button">
        <div class="btn-container d-flex justify-content-center">
            <input class="btn-search" type="submit" value="Update">
        </div>
    </div>
</form>

  </section>
</body>
</html>
