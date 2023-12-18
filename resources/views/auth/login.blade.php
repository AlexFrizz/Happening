@extends('layouts.app')

@section('content')

<div class="panel-container login-container section-padding pt-4">
  <div class="panel login-panel glass">

    <div class="container">
      <div class="row-login justify-content-center">
        <div class="col">
          <div class="panel-login">
            <div class="panel-header">
              <h3>{{ __('Login') }}</h3>
            </div>
            <p class="panel-description d-flex justify-content-center">login or register to continue access pages</p>
            <div class="panel-body">
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row row-email mb-3">
                  <label for="email" class="col-md-4 col-form-label text-md-end login-group">{{ __('Email Address') }}</label>
                  <div class="col-md-6">
                    <input id="email" type="email" class="form-control glass form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="you@example.com">

                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                  <div class="row row-password mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end login-group">{{ __('Password') }}</label>
                    <div class="col-md-6">
                      <input id="password" type="password" class="form-control glass form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="enter 8 characters or more">

                      @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <div class="col-md-6 offset-md-4">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                          {{ __('Remember Me') }}
                        </label>
                      </div>
                    </div>
                  </div>

                <div class="row mb-0">
                  <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-login">
                      {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                      </a>
                    @endif
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
