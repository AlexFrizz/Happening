@extends('layouts.app')

@section('content')

<div class="panel-container login-container section-padding pt-4">
  <div class="panel login-panel glass">
    <div class="container">
      <div class="row-register justify-content-center">
        <div class="col">
          <div class="panel-login">
            <div class="panel-header">
              <h3>{{ __('Register') }}</h3>
            </div>
            <p class="panel-description d-flex justify-content-center">login or register to continue access pages</p>

            <div class="panel-body">
              <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row row-name mb-3">
                  <label for="name" class="col-md-4 col-form-label login-group text-md-end">{{ __('Name') }}</label>
                  <div class="col-md-6">
                    <input id="name" type="text" class="form-control glass form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="what's your name?">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>

                <div class="row row-surname mb-3">
                  <label for="surname" class="col-md-4 col-form-label login-group text-md-end">{{ __('Surname') }}</label>
                  <div class="col-md-6">
                    <input id="surname" type="text" class="form-control glass form-control-lg @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus placeholder="what's your surname?">
                    @error('surname')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>

                  <div class="row row-email mb-3">
                    <label for="email" class="col-md-4 col-form-label login-group text-md-end">{{ __('Email Address') }}</label>
                    <div class="col-md-6">
                      <input id="email" type="email" class="form-control glass form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="you@example.com">

                      @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="row row-password mb-3">
                    <label for="password" class="col-md-4 col-form-label login-group text-md-end">{{ __('Password') }}</label>
                    <div class="col-md-6">
                      <input id="password" type="password" class="form-control glass form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="enter 8 characters or more">

                      @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="row row-confirm mb-3">
                    <label for="password-confirm" class="col-md-4 col-form-label login-group text-md-end">{{ __('Confirm Password') }}</label>
                    <div class="col-md-6">
                      <input id="password-confirm" type="password" class="form-control glass form-control-lg" name="password_confirmation" required autocomplete="new-password" placeholder="repeat your password">
                    </div>
                  </div>

                  <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-login">
                        {{ __('Register') }}
                      </button>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
