@extends('layouts.master')


@section('content')
<div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
    <div class="container">
      <div class="breadcrumb-content text-center">
        <h2 data-aos="fade-up" data-aos-delay="200">A propos</h2>
        <ul data-aos="fade-up" data-aos-delay="400">
          <li><a href="{{ route('acceuil') }}">Acceuil</a></li>
          <li><i class="ti-angle-right"></i></li>
          <li>A propos</li>
        </ul>
      </div>
    </div>
    <div
      class="breadcrumb-img-1"
      data-aos="fade-right"
      data-aos-delay="200"
    >
      <img src="{{ asset('assets/store/images/banner/breadcrumb-1.png') }}" alt="" />
    </div>
    <div class="breadcrumb-img-2" data-aos="fade-left" data-aos-delay="200">
      <img src="{{ asset('assets/store/images/banner/breadcrumb-2.png') }}" alt="" />
    </div>
  </div>
  <div class="about-us-area pt-100 pb-100">
    <div class="container">
      <div class="row align-items-center flex-row-reverse">
        <div class="col-lg-6">
          <div class="about-content text-center">
            <h2 data-aos="fade-up" data-aos-delay="200">MT Informatique</h2>
            <h1 data-aos="fade-up" data-aos-delay="300">
              Meilleure Boutique
            </h1>
            <p data-aos="fade-up" data-aos-delay="400">
              MT Informatique - Votre guichet unique pour tous vos besoins
              en informatique <br />
              Meilleurs produits, prix compétitifs, service exceptionnel
            </p>
            <p class="mrg-inc" data-aos="fade-up" data-aos-delay="500">
              Bienvenue chez MT Informatique, votre meilleure source pour
              tout ce qui concerne l'informatique! Que vous soyez à la
              recherche d'un nouvel ordinateur portable, d'une tablette,
              d'un smartphone ou simplement de quelques accessoires, nous
              avons ce qu'il vous faut.
            </p>
            <div
              class="btn-style-3 btn-hover"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <a class="btn border-radius-none" href="{{ route('boutique') }}"
                >Acheter Maintenant</a
              >
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-img" data-aos="fade-up" data-aos-delay="400">
            <img src="{{ asset('assets/store/images/banner/about-us.jpg') }}" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="banner-area pb-100">
    <div
      class="bg-img bg-padding-2"
      style="background-image: url(assets/store/images/bg/bg-2.jpg)"
    >
      <div class="container">
        <div class="banner-content-5 banner-content-5-static">
          <span data-aos="fade-up" data-aos-delay="200"
            >Jusqu'à 40 % de Réduction</span
          >
          <h1 data-aos="fade-up" data-aos-delay="400">
            Bienvenue Chez <br />MT Informatique
          </h1>
          <div
            class="btn-style-3 btn-hover"
            data-aos="fade-up"
            data-aos-delay="600"
          >
            <a class="btn border-radius-none" href="{{ route('boutique') }}"
              >Achetez maintenant!</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="testimonial-area pb-100">
    <div class="container">
      <div
        class="section-title-2 st-border-center text-center mb-75"
        data-aos="fade-up"
        data-aos-delay="200"
      >
        <h2>Témoignage</h2>
      </div>
      <div class="testimonial-active swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div
              class="single-testimonial"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="testimonial-img">
                <img src="{{ asset('assets/store/images/testimonial/client-1.png') }}" alt="" />
              </div>
              <p>
                J'ai été satisfait de mon expérience chez MT Informatique. Ils ont un large choix de produits et les prix sont raisonnables.
              </p>
              <div class="testimonial-info">
                <h4>Yassine Amor</h4>
                <span> Cotch Fitness.</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="single-testimonial"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <div class="testimonial-img">
                <img src="{{ asset('assets/store/images/testimonial/client-2.png') }}" alt="" />
              </div>
              <p>
                J'ai acheté un nouvel ordinateur portable chez MT Informatique et l'équipe a été très serviable et compétente.
              </p>
              <div class="testimonial-info">
                <h4>Moahamed Amine</h4>
                <span> Designer.</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="single-testimonial"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <div class="testimonial-img">
                <img src="{{ asset('assets/store/images/testimonial/client-2.png') }}" alt="" />
              </div>
              <p>
                J'ai récemment achetée un ordinateur portable chez MT Informatique et je suis très satisfaite de mon achat.
              </p>
              <div class="testimonial-info">
                <h4>Jihane Laaroussi</h4>
                <span> Enseignante.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div
    class="funfact-area bg-img pt-100 pb-70"
    style="background-image: url(assets/store/images/bg/bg-4.jpg)"
  >
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
          <div
            class="single-funfact text-center mb-30"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="funfact-img">
              <img src="{{ asset('assets/store/images/icon-img/client.png') }}" alt="" />
            </div>
            <h2 class="count" style="color: #ffffff;">1200</h2>
            <span style="color: #ffffff;">Clients Satisfaits</span>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
          <div
            class="single-funfact text-center mb-30"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <div class="funfact-img">
              <img src="{{ asset('assets/store/images/icon-img/employes.png') }}" alt="" />
            </div>
            <h2 class="count" style="color: #ffffff;">20</h2>
            <span style="color: #ffffff;">Employés</span>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
          <div
            class="single-funfact text-center mb-30"
            data-aos="fade-up"
            data-aos-delay="600"
          >
            <div class="funfact-img">
              <img src="{{ asset('assets/store/images/icon-img/experience.png') }}" alt="" />
            </div>
            <h2 class="count" style="color: #ffffff;">10</h2>
            <span style="color: #ffffff;">Expériences</span>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
          <div
            class="single-funfact text-center mb-30 mrgn-none"
            data-aos="fade-up"
            data-aos-delay="800"
          >
            <div class="funfact-img">
              <img src="{{ asset('assets/store/images/icon-img/categories.png') }}" alt="" />
            </div>
            <h2 class="count" style="color: #ffffff;">20</h2>
            <span style="color: #ffffff;">Catégories</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="team-area pt-100 pb-70">
    <div class="container">
      <div
        class="section-title-2 st-border-center text-center mb-75"
        data-aos="fade-up"
        data-aos-delay="200"
      >
        <h2>Développeur</h2>
      </div>
      <div class="row">


        <div class="col-lg-4 col-md-4 col-sm-4 col-12" style="margin: auto;">
          <div
            class="single-team-wrap text-center mb-30"
            data-aos="fade-up"
            data-aos-delay="600"
          >
            <a href="https://dev-yassine-chmarekh-portfolio.pantheonsite.io/" target="_blank"><img src="{{ asset('assets/store/images/team/ana.png') }}" alt="" /></a>
            <div class="team-info-position">
              <div class="team-info">
                <a href="https://dev-yassine-chmarekh-portfolio.pantheonsite.io/" target="_blank"><h3>CHMAREKH Yassine</h3></a>
                <a href="https://dev-yassine-chmarekh-portfolio.pantheonsite.io/" target="_blank"><span>Développeur Web</span></a>
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
        <p>
          Votre partenaire informatique de confiance à Casablanca
        </p>
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
