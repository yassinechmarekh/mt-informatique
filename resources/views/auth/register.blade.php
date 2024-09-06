@extends('layouts.master')

@section('content')
<div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
    <div class="container">
      <div class="breadcrumb-content text-center">
        <h2>Register</h2>
        <ul>
          <li><a href="{{ route('acceuil') }}">Acceuil</a></li>
          <li><i class="ti-angle-right"></i></li>
          <li>Register</li>
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
              <a href="{{ route('login') }}">
                <h4>login</h4>
              </a>
              <a class="active" href="{{ route('register') }}">
                <h4>register</h4>
              </a>
            </div>
            <div class="tab-content">
              <div class="tab-pane active">
                <div class="login-form-container">
                  <div class="login-register-form">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div>
                            <input
                                class="@error('email') is-invalid @enderror"
                                type="email"
                                name="email"
                                placeholder="Email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                            />
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
                                autocomplete="new-password"
                            />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                            <input
                                type="password"
                                name="password_confirmation"
                                placeholder="Confirmer le Mot de passe"
                                required
                                autocomplete="new-password"
                            />
                        </div>
                        <div class="button-box btn-hover">
                            <button type="submit">Register</button>
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
