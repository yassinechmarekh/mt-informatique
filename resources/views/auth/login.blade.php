@extends('layouts.master')

@section('content')
<div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
    <div class="container">
      <div class="breadcrumb-content text-center">
        <h2>Login</h2>
        <ul>
          <li><a href="{{ route('acceuil') }}">Acceuil</a></li>
          <li><i class="ti-angle-right"></i></li>
          <li>Login</li>
        </ul>
      </div>
    </div>
    <div class="breadcrumb-img-1">
      <img src="assets/images/banner/breadcrumb-1.png" alt="" />
    </div>
    <div class="breadcrumb-img-2">
      <img src="assets/images/banner/breadcrumb-2.png" alt="" />
    </div>
  </div>
  <div class="login-register-area pb-100 pt-95">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12 offset-lg-2">
          <div class="login-register-wrapper">
            <div class="login-register-tab-list nav">
              <a class="active" href="{{ route('login') }}">
                <h4>login</h4>
              </a>
              <a href="{{ route('register') }}">
                <h4>register</h4>
              </a>
            </div>
            <div class="tab-content">
              <div class="tab-pane active">
                <div class="login-form-container">
                  <div class="login-register-form">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div>
                            <input class="@error('email') is-invalid @enderror" type="text" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                            <input
                                class="@error('password') is-invalid @enderror"
                                type="password"
                                name="password"
                                placeholder="Mot de passe"
                                required
                                autocomplete="current-password"
                            />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="login-toggle-btn">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                            <label for="remember">Souvenir de moi</label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">Mot de passe oublié?</a>
                            @endif
                        </div>
                        <div class="button-box btn-hover">
                            <button type="submit">Login</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
