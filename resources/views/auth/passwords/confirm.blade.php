@extends('layouts.master')

@section('content')
<div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
    <div class="container">
      <div class="breadcrumb-content text-center">
        <h2>
          Confirmer <br />
          Mot de passe
        </h2>
        <ul>
          <li><a href="index.html">Acceuil</a></li>
          <li><i class="ti-angle-right"></i></li>
          <li>Confirmer Mot de passe</li>
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
                <h4>Confirmez le Mot de passe</h4>
              </a>
            </div>
            <div class="tab-content">
              <div>
                <div class="login-form-container">
                  <div class="login-register-form">
                    <form action="{{ route('password.confirm') }}" method="POST">
                        @csrf
                        <div>
                            <label for="password" class="fs-6 mb-3">Veuillez confirmer votre mot de passe avant de continuer.</label>
                            <input type="password" id="password" name="password" class="@error('password') is-invalid @enderror" placeholder="Mot de passe" required autocomplete="current-password" />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      <div class="login-toggle-btn">
                        <div class="button-box btn-hover" style="display: inline-block;">
                          <button type="submit">
                            Réinitialiser le mot de passe
                          </button>
                        </div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">Mot de passe oublié?</a>
                        @endif
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
