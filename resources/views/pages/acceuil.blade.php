@extends('layouts.master')


@section('content')
<div class="slider-area">
    <div class="slider-active swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div
            class="intro-section slider-height-1 slider-content-center bg-img single-animation-wrap slider-bg-color-1"
            style="
              background-image: url(assets/store/images/slider/slider-bg-1.jpg);
            "
          >
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                  <div class="slider-content-1 slider-animated-1">
                    <h3 class="animated">Ordinateurs</h3>
                    <h1 class="animated">Nouveau <br />Arrivage</h1>
                    <div class="slider-btn btn-hover">
                      <a href="{{ route('categories.details','equipements-bureautiques') }}" class="btn animated">
                        Achetez Maintenant <i class="ti-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="hero-slider-img-1 slider-animated-1">
                    <img
                      class="animated animated-slider-img-1"
                      src="{{asset('assets/store/images/slider/slider-img-1.png')}}"
                      alt=""
                    />
                    <div class="product-offer animated">
                      <h5>30% <span>Off</span></h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div
            class="intro-section slider-height-1 slider-content-center bg-img single-animation-wrap slider-bg-color-1"
            style="
              background-image: url(assets/store/images/slider/slider-bg-1.jpg);
            "
          >
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                  <div class="slider-content-1 slider-animated-1">
                    <h3 class="animated">Imprimantes</h3>
                    <h1 class="animated">Nouveau <br />Arrivage</h1>
                    <div class="slider-btn btn-hover">
                      <a href="{{ route('categories.details','equipements-bureautiques') }}" class="btn animated">
                        Achetez Maintenant <i class="ti-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="hero-slider-img-1 slider-animated-1">
                    <img
                      class="animated animated-slider-img-1"
                      src="{{asset('assets/store/images/slider/slider-img-1-2.png')}}"
                      alt=""
                    />
                    <div class="product-offer animated">
                      <h5>50% <span>Off</span></h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div
            class="intro-section slider-height-1 slider-content-center bg-img single-animation-wrap slider-bg-color-1"
            style="
              background-image: url(assets/store/images/slider/slider-bg-1.jpg);
            "
          >
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                  <div class="slider-content-1 slider-animated-1">
                    <h3 class="animated">Accessoires</h3>
                    <h1 class="animated">Nouveau <br />Arrivage</h1>
                    <div class="slider-btn btn-hover">
                      <a href="{{ route('categories.details','accessoires-composants') }}" class="btn animated">
                        Achetez Maintenant <i class="ti-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="hero-slider-img-1 slider-animated-1">
                    <img
                      class="animated animated-slider-img-1"
                      src="{{asset('assets/store/images/slider/slider-img-1-3.png')}}"
                      alt=""
                    />
                    <div class="product-offer animated">
                      <h5>70% <span>Off</span></h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="home-slider-prev main-slider-nav">
          <i class="fa fa-angle-left"></i>
        </div>
        <div class="home-slider-next main-slider-nav">
          <i class="fa fa-angle-right"></i>
        </div>
      </div>
    </div>
  </div>
  <div class="banner-area pt-100 pb-70">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
          <div
            class="banner-wrap mb-30"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <a href="{{ route('categories.details','equipements-bureautiques') }}"
              ><img src="{{asset('assets/store/images/banner/banner-1.png')}}" alt=""
            /></a>
            <div class="banner-content-1">
              <h5>Nouveau Arrivage</h5>
              <h3>Écran</h3>
              <div class="banner-btn">
                <a href="{{ route('categories.details','equipements-bureautiques') }}">Achetez</a>
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
            <a href="{{ route('categories.details','equipements-bureautiques') }}"
              ><img src="{{asset('assets/store/images/banner/banner-2.png')}}" alt=""
            /></a>
            <div class="banner-content-1">
              <h5>Nouveau Arrivage</h5>
              <h3>PC Portable</h3>
              <div class="banner-btn">
                <a href="{{ route('categories.details','equipements-bureautiques') }}">Achetez</a>
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
            <a href="{{ route('categories.details','equipements-bureautiques') }}"
              ><img src="{{ asset('assets/store/images/banner/banner-3.png') }}" alt=""
            /></a>
            <div class="banner-content-1">
              <h5>Nouveau Arrivage</h5>
              <h3>Imprimantes</h3>
              <div class="banner-btn">
                <a href="{{ route('categories.details','equipements-bureautiques') }}">Achetez</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="product-area pb-95">
    <div class="container">
      <div
        class="section-border section-border-margin-1"
        data-aos="fade-up"
        data-aos-delay="200"
      >
        <div class="section-title-timer-wrap bg-white">
          <div class="section-title-1">
            <h2>Affaire du jour</h2>
          </div>
        </div>
      </div>
      <div class="product-slider-active-1 swiper-container">
        <div class="swiper-wrapper">
            @foreach ($produits_affaire as $produit_affaire)
                <div class="swiper-slide">
                    <div
                    class="product-wrap"
                    data-aos="fade-up"
                    data-aos-delay="200"
                    >
                    <div class="product-img img-zoom mb-25">
                        <a href="{{ route('produit-details',$produit_affaire->slug) }}">
                        <img src="{{asset('assets/store/images/product/' . $produit_affaire->ImagePrincipale)}}" alt="" />
                        </a>
                        <div class="product-badge badge-top badge-right badge-pink">
                        <span>{{ $produit_affaire->ParametreStatus }}</span>
                        </div>
                        <div class="product-action-wrap">
                            @php
                                $isInWishlist = false;
                                if(session('wishlist')) {
                                    foreach (session('wishlist') as $wishlist) {
                                        if ($wishlist['idproduit'] == $produit_affaire->id) {
                                            $isInWishlist = true;
                                            break;
                                        }
                                    }
                                }
                            @endphp
                            @if($isInWishlist)
                                <div>
                                    <button type="button" class="product-action-btn-1" title="Wishlist">
                                        <a href="{{ route('supprimer.wishlist', $produit_affaire->id) }}">
                                            <i class="bi bi-heart-fill" style="color:#4fbcc9;"></i>
                                        </a>
                                    </button>
                                </div>
                            @else
                                <div>
                                    <form action="{{ route('ajouter.wishlist') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="idProduit" value="{{ $produit_affaire->id }}">
                                        <button type="submit" class="product-action-btn-1" title="Wishlist">
                                            <i class="pe-7s-like"></i>
                                        </button>
                                    </form>
                                </div>
                            @endif

                            <div>
                                <button
                                    class="product-action-btn-1"
                                    title="Quick View"
                                    data-bs-toggle="modal"
                                    data-bs-target="#exampleModal{{ $produit_affaire->id }}"
                                >
                                    <i class="pe-7s-look"></i>
                                </button>
                            </div>
                        </div>

                        <div class="product-action-2-wrap">
                            <form action="{{ route('ajouter.panier') }}" method="POST">
                                @csrf
                                <input type="hidden" id="idProduit" name="idProduit" value="{{ $produit_affaire->id }}">
                                <input type="hidden" id="quantite" name="quantite" value="1">
                                <button type="submit" class="product-action-btn-2"><i class="pe-7s-cart"></i>Ajouter au panier</button>
                            </form>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3>
                        <a href="{{ route('produit-details',$produit_affaire->slug) }}">{{ Str::limit($produit_affaire->titre,60) }}</a>
                        </h3>
                        <div class="product-price">
                        <span class="old-price">{{ $produit_affaire->AncienPrix }}</span>
                        <span class="new-price">{{ $produit_affaire->NouveauPrix }}</span>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div
          class="product-prev-1 product-nav-1"
          data-aos="fade-up"
          data-aos-delay="200"
        >
          <i class="fa fa-angle-left"></i>
        </div>
        <div
          class="product-next-1 product-nav-1"
          data-aos="fade-up"
          data-aos-delay="200"
        >
          <i class="fa fa-angle-right"></i>
        </div>
      </div>
    </div>
  </div>
  <div class="banner-area pb-70">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-7">
          <div
            class="banner-wrap mb-30"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <a href="{{ route('categories.details','accessoires-composants') }}"
              ><img src="{{asset('assets/store/images/banner/banner-4.jpg')}}" alt=""
            /></a>
            <div class="banner-content-2">
              <span>Réduction 30%</span>
              <h2>Nouveau Article</h2>
              <p>
                Profitez de nos offres exceptionnelles dès maintenant!
              </p>
              <div class="btn-style-2 btn-hover">
                <a href="{{ route('categories.details','accessoires-composants') }}" class="btn"> Acheter Maintenant </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-5">
          <div
            class="banner-wrap mb-30"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <a href="{{ route('categories.details','equipements-bureautiques') }}"
              ><img src="{{asset('assets/store/images/banner/banner-5.jpg')}}" alt=""
            /></a>
            <div class="banner-content-3">
              <h3>
                Jusqu'à 30% de
                <img src="{{asset('assets/store/images/icon-img/reduction.png')}}" alt="" /> Sur Chaque Article
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="service-area pb-70">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
          <div class="service-wrap" data-aos="fade-up" data-aos-delay="200">
            <div class="service-img">
              <img src="{{asset('assets/store/images/icon-img/car.png')}}" alt="" />
            </div>
            <div class="service-content">
              <h3>Livraison Gratuite</h3>
              <p>Frais de port offerts</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
          <div class="service-wrap" data-aos="fade-up" data-aos-delay="400">
            <div class="service-img">
              <img src="{{asset('assets/store/images/icon-img/time.png')}}" alt="" />
            </div>
            <div class="service-content">
              <h3>Support 24/7</h3>
              <p>Assistance 24h/24</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
          <div class="service-wrap" data-aos="fade-up" data-aos-delay="600">
            <div class="service-img">
              <img src="{{asset('assets/store/images/icon-img/dollar.png')}}" alt="" />
            </div>
            <div class="service-content">
              <h3>Retour d'argent</h3>
              <p>Garantie de retour</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
          <div class="service-wrap" data-aos="fade-up" data-aos-delay="800">
            <div class="service-img">
              <img src="{{asset('assets/store/images/icon-img/discount.png')}}" alt="" />
            </div>
            <div class="service-content">
              <h3>Remise</h3>
              <p>Pour chaque commande</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br><br>
  <div class="product-area pb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div
            class="home-single-product-img"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <a href="{{ route('produit-details','ordinateur-portable-lenovo-v15-g3-iap') }}"
              ><img src="{{asset('assets/store/images/product/single-product.jpg')}}" alt=""
            /></a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="home-single-product-content">
            <h2 data-aos="fade-up" data-aos-delay="200">Ordinateur Portable Lenovo V15 G3 IAP</h2>
            <h3 data-aos="fade-up" data-aos-delay="400">4 790,00 DH</h3>
            <p data-aos="fade-up" data-aos-delay="600">
              Intel® Core™ i3-1215U, 6C (2P + 4E) / 8T, P-core 1.2 / 4.4GHz, E-core 0.9 / 3.3GHz, 10MB <br>
              RAM: 8 GB (4GB Soldered DDR4-3200 + 4GB SO-DIMM DDR4-3200) <br>
              Disque dur: 256GB SSD M.2 2242 PCIe® 4.0x4 NVMe® <br>
              Écran: 15.6" FHD (1920x1080) TN 250nits Anti-glare <br>
              Carte graphique: Integrated Intel® UHD <br>
              Clavier: Non-backlit, français (AZERTY) <br>
              Poids: À partir de 1.7 kg <br><br>
            </p>
            <div
              class="product-details-action-wrap"
              data-aos="fade-up"
              data-aos-delay="1000"
            >
            <form action="{{ route('ajouter.panier') }}" method="POST">
                @csrf
                <div class="product-details-action-wrap">
                    <input type="hidden" id="idProduit" name="idProduit" value="24">
                    <div class="product-quality">
                        <input
                        class="cart-plus-minus-box input-text qty text"
                        name="quantite"
                        value="1"
                        />
                    </div>
                    <div class="single-product-cart btn-hover">
                        <button type="submit">Ajouter au panier</button>
                    </div>
                    @php
                        $isInWishlist = false;
                        if(session('wishlist')) {
                            foreach (session('wishlist') as $wishlist) {
                                if ($wishlist['idproduit'] == 24) {
                                    $isInWishlist = true;
                                    break;
                                }
                            }
                        }
                    @endphp
                    @if($isInWishlist)
                        <div class="single-product-wishlist">
                            <a title="Wishlist" href="{{ route('supprimer.wishlist',24) }}">
                                <i class="bi bi-heart-fill" style="color:#4fbcc9;"></i>
                            </a>
                        </div>
                    @else
                        <div class="single-product-wishlist">
                            <a title="Wishlist" href="{{ route('ajouter.wishlist.id',24) }}">
                                <i class="pe-7s-like"></i>
                            </a>
                        </div>
                    @endif
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="banner-area pb-95" data-aos="fade-up" data-aos-delay="200">
    <div class="container">
      <img src="{{asset('assets/store/images/bg/bg-1.jpg')}}" id="bg-img-1" alt="">
      </div>
    </div>
  </div>
  <div class="product-area pb-60">
    <div class="container">
      <div class="section-title-tab-wrap mb-75">
        <div
          class="section-title-2"
          data-aos="fade-up"
          data-aos-delay="200"
        >
          <h2>Produits Tendance</h2>
        </div>
        <div
          class="tab-style-1 nav"
          data-aos="fade-up"
          data-aos-delay="400"
        >
          <a class="active" href="#pro-1" data-bs-toggle="tab"
            >Nouveau Arrivage
          </a>
          <a href="#pro-2" data-bs-toggle="tab" class=""> Meilleures Ventes </a>
          <a href="#pro-3" data-bs-toggle="tab" class=""> Articles Soldés </a>
        </div>
      </div>
      <div class="tab-content jump">
        <div id="pro-1" class="tab-pane active">
          <div class="row">
            @foreach ($produits_nouveau as $produit_nouveau)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div
                    class="product-wrap mb-35"
                    data-aos="fade-up"
                    data-aos-delay="200"
                    >
                    <div class="product-img img-zoom mb-25">
                        <a href="{{ route('produit-details',$produit_nouveau->slug) }}">
                        <img src="{{asset('assets/store/images/product/' . $produit_nouveau->ImagePrincipale)}}" alt="" />
                        </a>
                        <div
                        class="product-badge badge-top badge-right badge-pink"
                        >
                        <span>{{ $produit_nouveau->ParametreStatus }}</span>
                        </div>
                        <div class="product-action-wrap">
                        @php
                            $isInWishlist = false;
                            if(session('wishlist')) {
                                foreach (session('wishlist') as $wishlist) {
                                    if ($wishlist['idproduit'] == $produit_nouveau->id) {
                                        $isInWishlist = true;
                                        break;
                                    }
                                }
                            }
                        @endphp
                        @if($isInWishlist)
                            <div>
                                <button type="button" class="product-action-btn-1" title="Wishlist">
                                    <a href="{{ route('supprimer.wishlist', $produit_nouveau->id) }}">
                                        <i class="bi bi-heart-fill" style="color:#4fbcc9;"></i>
                                    </a>
                                </button>
                            </div>
                        @else
                            <div>
                                <form action="{{ route('ajouter.wishlist') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="idProduit" value="{{ $produit_nouveau->id }}">
                                    <button type="submit" class="product-action-btn-1" title="Wishlist">
                                        <i class="pe-7s-like"></i>
                                    </button>
                                </form>
                            </div>
                        @endif
                        <button
                            class="product-action-btn-1"
                            title="Quick View"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $produit_nouveau->id }}"
                        >
                            <i class="pe-7s-look"></i>
                        </button>
                        </div>
                        <div class="product-action-2-wrap">
                            <form action="{{ route('ajouter.panier') }}" method="POST">
                                @csrf
                                <input type="hidden" id="idProduit" name="idProduit" value="{{ $produit_nouveau->id }}">
                                <input type="hidden" id="quantite" name="quantite" value="1">
                                <button type="submit" class="product-action-btn-2"><i class="pe-7s-cart"></i>Ajouter au panier</button>
                            </form>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3>
                        <a href="{{ route('produit-details',$produit_nouveau->slug) }}"
                            >{{ Str::limit($produit_nouveau->titre,60) }}</a
                        >
                        </h3>
                        <div class="product-price">
                        <span>{{ $produit_nouveau->NouveauPrix }}</span>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
          </div>
        </div>
        <div id="pro-2" class="tab-pane">
          <div class="row">
            @foreach ($produits_populaire as $produit_populaire)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="product-wrap mb-35">
                    <div class="product-img img-zoom mb-25">
                        <a href="{{ route('produit-details',$produit_populaire->slug) }}">
                        <img src="{{asset('assets/store/images/product/'. $produit_populaire->ImagePrincipale)}}" alt="" />
                        </a>
                        <div
                        class="product-badge badge-top badge-right badge-pink"
                        >
                        <span>{{ $produit_populaire->ParametreStatus }}</span>
                        </div>
                        <div class="product-action-wrap">
                        @php
                            $isInWishlist = false;
                            if(session('wishlist')) {
                                foreach (session('wishlist') as $wishlist) {
                                    if ($wishlist['idproduit'] == $produit_populaire->id) {
                                        $isInWishlist = true;
                                        break;
                                    }
                                }
                            }
                        @endphp
                        @if($isInWishlist)
                            <div>
                                <button type="button" class="product-action-btn-1" title="Wishlist">
                                    <a href="{{ route('supprimer.wishlist', $produit_populaire->id) }}">
                                        <i class="bi bi-heart-fill" style="color:#4fbcc9;"></i>
                                    </a>
                                </button>
                            </div>
                        @else
                            <div>
                                <form action="{{ route('ajouter.wishlist') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="idProduit" value="{{ $produit_populaire->id }}">
                                    <button type="submit" class="product-action-btn-1" title="Wishlist">
                                        <i class="pe-7s-like"></i>
                                    </button>
                                </form>
                            </div>
                        @endif
                        <button
                            class="product-action-btn-1"
                            title="Quick View"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $produit_populaire->id }}"
                        >
                            <i class="pe-7s-look"></i>
                        </button>
                        </div>
                        <div class="product-action-2-wrap">
                            <form action="{{ route('ajouter.panier') }}" method="POST">
                                @csrf
                                <input type="hidden" id="idProduit" name="idProduit" value="{{ $produit_populaire->id }}">
                                <input type="hidden" id="quantite" name="quantite" value="1">
                                <button type="submit" class="product-action-btn-2"><i class="pe-7s-cart"></i>Ajouter au panier</button>
                            </form>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3>
                        <a href="{{ route('produit-details',$produit_populaire->slug) }}">{{ Str::limit($produit_populaire->titre,60) }}</a>
                        </h3>
                        <div class="product-price">
                        <span>{{ $produit_populaire->NouveauPrix }}</span>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
          </div>
        </div>
        <div id="pro-3" class="tab-pane">
          <div class="row">
            @foreach ($produits_solde as $produit_solde)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="product-wrap mb-35">
                    <div class="product-img img-zoom mb-25">
                        <a href="{{ route('produit-details',$produit_solde->slug) }}">
                        <img src="{{asset('assets/store/images/product/'.$produit_solde->ImagePrincipale)}}" alt="" />
                        </a>
                        <div
                        class="product-badge badge-top badge-right badge-pink"
                        >
                        <span>{{ $produit_solde->ParametreStatus }}</span>
                        </div>
                        <div class="product-action-wrap">
                        @php
                            $isInWishlist = false;
                            if(session('wishlist')) {
                                foreach (session('wishlist') as $wishlist) {
                                    if ($wishlist['idproduit'] == $produit_solde->id) {
                                        $isInWishlist = true;
                                        break;
                                    }
                                }
                            }
                        @endphp
                        @if($isInWishlist)
                            <div>
                                <button type="button" class="product-action-btn-1" title="Wishlist">
                                    <a href="{{ route('supprimer.wishlist', $produit_solde->id) }}">
                                        <i class="bi bi-heart-fill" style="color:#4fbcc9;"></i>
                                    </a>
                                </button>
                            </div>
                        @else
                            <div>
                                <form action="{{ route('ajouter.wishlist') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="idProduit" value="{{ $produit_solde->id }}">
                                    <button type="submit" class="product-action-btn-1" title="Wishlist">
                                        <i class="pe-7s-like"></i>
                                    </button>
                                </form>
                            </div>
                        @endif
                        <button
                            class="product-action-btn-1"
                            title="Quick View"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $produit_solde->id }}"
                        >
                            <i class="pe-7s-look"></i>
                        </button>
                        </div>
                        <div class="product-action-2-wrap">
                            <form action="{{ route('ajouter.panier') }}" method="POST">
                                @csrf
                                <input type="hidden" id="idProduit" name="idProduit" value="{{ $produit_solde->id }}">
                                <input type="hidden" id="quantite" name="quantite" value="1">
                                <button type="submit" class="product-action-btn-2"><i class="pe-7s-cart"></i>Ajouter au panier</button>
                            </form>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3>
                        <a href="{{ route('produit-details',$produit_solde->slug) }}">{{ Str::limit($produit_solde->titre,60) }}</a>
                        </h3>
                        <div class="product-price">
                        <span class="old-price">{{ $produit_solde->AncienPrix }}</span>
                        <span class="new-price">{{ $produit_solde->NouveauPrix }}</</span>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="brand-logo-area pb-95">
    <div class="container">
      <div class="brand-logo-active swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div
              class="single-brand-logo"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a href="#"
                ><img
                  src="{{asset('assets/store/images/brand-logo/brand-logo-1.jpg')}}"
                  alt=""
              /></a>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="single-brand-logo"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a href="#"
                ><img
                  src="{{asset('assets/store/images/brand-logo/brand-logo-2.jpg')}}"
                  alt=""
              /></a>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="single-brand-logo"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <a href="#"
                ><img
                  src="{{asset('assets/store/images/brand-logo/brand-logo-3.jpg')}}"
                  alt=""
              /></a>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="single-brand-logo"
              data-aos="fade-up"
              data-aos-delay="800"
            >
              <a href="#"
                ><img
                  src="{{asset('assets/store/images/brand-logo/brand-logo-4.jpg')}}"
                  alt=""
              /></a>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="single-brand-logo"
              data-aos="fade-up"
              data-aos-delay="1000"
            >
              <a href="#"
                ><img
                  src="{{asset('assets/store/images/brand-logo/brand-logo-5.jpg')}}"
                  alt=""
              /></a>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="single-brand-logo"
              data-aos="fade-up"
              data-aos-delay="1200"
            >
              <a href="#"
                ><img
                  src="{{asset('assets/store/images/brand-logo/brand-logo-1.png')}}"
                  alt=""
              /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="blog-area pb-70">
    <div class="container">
      <div
        class="section-title-2 st-border-center text-center mb-75"
        data-aos="fade-up"
        data-aos-delay="200"
      >
        <h2>Dernières Nouvelles</h2>
      </div>
      <div class="row">
        @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div
                class="blog-wrap mb-30"
                data-aos="fade-up"
                data-aos-delay="200"
                >
                <div class="blog-img-date-wrap mb-25">
                    <div class="blog-img">
                    <a href="{{ route('blog.blog-details',$blog->slug) }}"
                        ><img src="{{asset($blog->imagePrincipale370x250px)}}" alt=""
                    /></a>
                    </div>
                    <div class="blog-date">
                    <h5>05 <span>May</span></h5>
                    </div>
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                    <ul>
                        <li><a href="#">Publié</a>,</li>
                        <li>Par :<a href="#"> MT Informatique</a></li>
                    </ul>
                    </div>
                    <h3>
                    <a href="{{ route('blog.blog-details',$blog->slug) }}"
                        >{{ Str::limit($blog->titre,100) }}</a
                    >
                    </h3>
                    <div class="blog-btn">
                    <a href="{{ route('blog.blog-details',$blog->slug) }}">Lire Plus</a>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
      </div>
    </div>
  </div>

    {{-- produit modals --}}
    @include('pages.section.produit-modal')
@endsection

@section('style')
    <style>
        .ti-star {
        color: #ddd; /* Couleur pour les étoiles vides */
        cursor: pointer;
        }
        .ti-star.filled {
        color: #4fbcc9; /* Couleur pour les étoiles remplies */
        }
    </style>
@endsection
