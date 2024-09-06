@extends('layouts.master')

@section('content')
<div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
    <div class="container">
      <div class="breadcrumb-content text-center">
        <h2>
          Réinitialiser <br />
          Mot de passe
        </h2>
        <ul>
          <li><a href="{{ route('acceuil') }}">Acceuil</a></li>
          <li><i class="ti-angle-right"></i></li>
          <li>Réinitialiser Mot de passe</li>
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
              <a>
                <h4>Mot de passe oublié ?</h4>
              </a>
            </div>
            <div class="tab-content">
              <div>
                <div class="login-form-container">
                  <div class="login-register-form">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('password.email') }}" method="POST">
                        @csrf
                        <div>
                            <input type="text" class="@error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="button-box btn-hover">
                            <button type="submit">
                                Réinitialiser le mot de passe
                            </button>
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
