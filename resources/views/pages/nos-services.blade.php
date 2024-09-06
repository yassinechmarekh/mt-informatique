@extends('layouts.master')

@section('style')
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
/>

<!-- Font Awesome CDN-->
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
/>
@endsection

@section('content')
<div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
    <div class="container">
      <div class="breadcrumb-content text-center">
        <h2 data-aos="fade-up" data-aos-delay="200">Nos Services</h2>
        <ul data-aos="fade-up" data-aos-delay="400">
          <li><a href="{{ route('acceuil') }}">Acceuil</a></li>
          <li><i class="ti-angle-right"></i></li>
          <li>Nos Services</li>
        </ul>
      </div>
    </div>
    <div class="breadcrumb-img-1" data-aos="fade-right" data-aos-delay="200">
      <img src="{{ asset('assets/store/images/banner/breadcrumb-1.png') }}" alt="" />
    </div>
    <div class="breadcrumb-img-2" data-aos="fade-left" data-aos-delay="200">
      <img src="{{ asset('assets/store/images/banner/breadcrumb-2.png') }}" alt="" />
    </div>
  </div>
  <div class="contact-us-area pt-100 pb-65">
    <div class="banner-area section-padding-2 pt-30 pb-70">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <div
              class="banner-wrap mb-30"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a href="product-details.html"
                ><img src="{{ asset('assets/store/images/banner/banner-20.jpg') }}" alt=""
              /></a>
              <div class="banner-content-11">
                <span>- 10% Solde</span>
                <h3>Station de travail</h3>
                <h4>HP Z6 Tower G5</h4>
                <div class="btn-style-6 btn-hover">
                  <a href="product-details.html" class="btn theme-color">
                    Achetez Maintenant
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div
              class="banner-wrap mb-30"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a href="product-details.html"
                ><img src="{{ asset('assets/store/images/banner/banner-21.jpg') }}" alt=""
              /></a>
              <div class="banner-content-11">
                <span>- 30% Solde</span>
                <h3>Samsung</h3>
                <h4>Monitor S5 32"</h4>
                <div class="btn-style-6 btn-hover">
                  <a href="product-details.html" class="btn theme-color">
                    Achetez Maintenant
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div
              class="banner-wrap mb-30"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <a href="product-details.html"
                ><img src="{{ asset('assets/store/images/banner/banner-22.jpg') }}" alt=""
              /></a>
              <div class="banner-content-11">
                <span>- 10% Solde</span>
                <h3>Imprimante</h3>
                <h4>Epson EcoTank</h4>
                <div class="btn-style-6 btn-hover">
                  <a href="product-details.html" class="btn theme-color">
                    Achetez Maintenant
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <section class="service">
        <div class="row-service" data-aos="fade-down" data-aos-delay="200">
          <h2 class="section-heading">Services</h2>
        </div>
        <div class="row-service">
          <div class="column-service" data-aos="zoom-in-right" data-aos-delay="200">
            <div class="card-service">
              <div class="icon-wrapper-service">
                <i class="bi bi-pc-display"></i>
              </div>
              <h3>Vente de Matériels</h3>
              <p>Proposant des équipements de qualité pour vos besoins.</p>
            </div>
          </div>
          <div class="column-service" data-aos="zoom-in" data-aos-delay="200">
            <div class="card-service">
              <div class="icon-wrapper-service">
                <i class="fa-solid fa-truck-fast"></i>
              </div>
              <h3>Service de Livraison</h3>
              <p>Livraison rapide et sécurisée, où que vous soyez.</p>
            </div>
          </div>
          <div class="column-service" data-aos="zoom-in-left" data-aos-delay="200">
            <div class="card-service">
              <div class="icon-wrapper-service">
                <i class="fas fa-wrench"></i>
              </div>
              <h3>Service de réparation</h3>
              <p>Réparation rapide et efficace de vos équipements.</p>
            </div>
          </div>
          <div class="column-service" data-aos="zoom-in-right" data-aos-delay="200">
            <div class="card-service">
              <div class="icon-wrapper-service">
                <i class="fa-solid fa-sliders"></i>
              </div>
              <h3>Installation et Configuration</h3>
              <p>Expertise dans l'installation et la configuration.</p>
            </div>
          </div>
          <div class="column-service" data-aos="zoom-in" data-aos-delay="200">
            <div class="card-service">
              <div class="icon-wrapper-service">
                <i class="fa-solid fa-headset"></i>
              </div>
              <h3>Maintenance et Support Technique</h3>
              <p>Support dédié et maintenance régulière assurés.</p>
            </div>
          </div>
          <div class="column-service" data-aos="zoom-in-left" data-aos-delay="200">
            <div class="card-service">
              <div class="icon-wrapper-service">
                <i class="fa-solid fa-lightbulb"></i>
              </div>
              <h3>Solutions sur Mesure</h3>
              <p>Solutions adaptées à vos besoins spécifiques.</p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <div class="banner-area padding-22-row-col pb-70">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div
            class="banner-wrap mb-30"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <a href="product-details.html"
              ><img src="{{ asset('assets/store/images/banner/banner-24.jpg') }}" alt=""
            /></a>
            <div class="banner-content-12">
              <h2>Meilleures Equipements</h2>
              <div class="btn-style-7">
                <a href="product-details.html">Achetez Maintenant</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div
            class="banner-wrap mb-30"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <a href="product-details.html"
              ><img src="{{ asset('assets/store/images/banner/banner-25.jpg') }}" alt=""
            /></a>
            <div class="banner-content-12 banner-content-12-width">
              <h2>Equipements</h2>
              <div class="btn-style-7">
                <a href="product-details.html">Achetez Maintenant</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="subscribe-area pb-100">
    <div class="container">
      <div
        class="section-title-3 text-center mb-55"
        data-aos="fade-up"
        data-aos-delay="200"
      >
        <h2>À votre service!</h2>
        <p>Votre partenaire informatique de confiance à Casablanca</p>
      </div>
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div
            id="mc_embed_signup"
            class="subscribe-form"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <form
              id="mc-embedded-subscribe-form"
              class="validate subscribe-form-style"
              novalidate=""
              target="_blank"
              name="mc-embedded-subscribe-form"
              method="post"
              action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
            >
              <div id="mc_embed_signup_scroll" class="mc-form">
                <input
                  class="email"
                  type="email"
                  required=""
                  placeholder="Votre Email"
                  name="EMAIL"
                  value=""
                />
                <div class="mc-news" aria-hidden="true">
                  <input
                    type="text"
                    value=""
                    tabindex="-1"
                    name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef"
                  />
                </div>
                <div class="clear">
                  <input
                    id="mc-embedded-subscribe"
                    class="button"
                    type="submit"
                    name="subscribe"
                    value="Contactez-nous"
                  />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
