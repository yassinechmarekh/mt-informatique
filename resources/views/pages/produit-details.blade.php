@extends('layouts.master')

@section('content')
<div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
    <div class="container">
      <div class="breadcrumb-content text-center">
        <h2 data-aos="fade-up" data-aos-delay="200">Détails du Produit</h2>
        <ul data-aos="fade-up" data-aos-delay="400">
          <li><a href="{{ route('acceuil') }}">Acceuil</a></li>
          <li><i class="ti-angle-right"></i></li>
          <li>Détails du Produit</li>
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
  <div class="product-details-area pb-100 pt-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div
            class="product-details-img-wrap product-details-vertical-wrap"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="product-details-small-img-wrap">
              <div
                class="swiper-container product-details-small-img-slider-1 pd-small-img-style"
              >
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="product-details-small-img">
                      <img
                        src="{{ asset('assets/store/images/product-details/small/' . $images->smallImage1) }}"
                        alt="Product Thumnail"
                      />
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="product-details-small-img">
                      <img
                        src="{{ asset('assets/store/images/product-details/small/' . $images->smallImage2) }}"
                        alt="Product Thumnail"
                      />
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="product-details-small-img">
                      <img
                        src="{{ asset('assets/store/images/product-details/small/' . $images->smallImage3) }}"
                        alt="Product Thumnail"
                      />
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="product-details-small-img">
                      <img
                        src="{{ asset('assets/store/images/product-details/small/' . $images->smallImage4) }}"
                        alt="Product Thumnail"
                      />
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="product-details-small-img">
                      <img
                        src="{{ asset('assets/store/images/product-details/small/' . $images->smallImage5) }}"
                        alt="Product Thumnail"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="pd-prev pd-nav-style">
                <i class="ti-angle-up"></i>
              </div>
              <div class="pd-next pd-nav-style">
                <i class="ti-angle-down"></i>
              </div>
            </div>
            <div
              class="swiper-container product-details-big-img-slider-1 pd-big-img-style"
            >
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="easyzoom-style">
                    <div class="easyzoom easyzoom--overlay">
                      <a
                        href="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage1) }}"
                      >
                        <img
                          src="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage1) }}"
                          alt=""
                        />
                      </a>
                    </div>
                    <a
                      class="easyzoom-pop-up img-popup"
                      href="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage1) }}"
                    >
                      <i class="pe-7s-search"></i>
                    </a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="easyzoom-style">
                    <div class="easyzoom easyzoom--overlay">
                      <a
                        href="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage2) }}"
                      >
                        <img
                          src="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage2) }}"
                          alt=""
                        />
                      </a>
                    </div>
                    <a
                      class="easyzoom-pop-up img-popup"
                      href="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage2) }}"
                    >
                      <i class="pe-7s-search"></i>
                    </a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="easyzoom-style">
                    <div class="easyzoom easyzoom--overlay">
                      <a
                        href="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage3) }}"
                      >
                        <img
                          src="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage3) }}"
                          alt=""
                        />
                      </a>
                    </div>
                    <a
                      class="easyzoom-pop-up img-popup"
                      href="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage3) }}"
                    >
                      <i class="pe-7s-search"></i>
                    </a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="easyzoom-style">
                    <div class="easyzoom easyzoom--overlay">
                      <a
                        href="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage4) }}"
                      >
                        <img
                          src="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage4) }}"
                          alt=""
                        />
                      </a>
                    </div>
                    <a
                      class="easyzoom-pop-up img-popup"
                      href="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage4) }}"
                    >
                      <i class="pe-7s-search"></i>
                    </a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="easyzoom-style">
                    <div class="easyzoom easyzoom--overlay">
                      <a
                        href="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage5) }}"
                      >
                        <img
                          src="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage5) }}"
                          alt=""
                        />
                      </a>
                    </div>
                    <a
                      class="easyzoom-pop-up img-popup"
                      href="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage5) }}"
                    >
                      <i class="pe-7s-search"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div
            class="product-details-content"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <h2>
              {{ $produit->titre }}
            </h2>
            <div class="product-details-price">
              <span class="old-price">{{ $produit->AncienPrix }}</span>
              <span class="new-price">{{ $produit->NouveauPrix }}</span>
            </div>
            <div class="product-details-review">
                <div class="review-rating">
                    @for ($i = 0; $i < 5; $i++)
                        @if ($i < intval($reviews->avg('rating')))
                            <i class="ti-star filled"></i>
                        @else
                            <i class="ti-star"></i>
                        @endif
                    @endfor
                </div>
                <span>{{ $reviews->count() }} Avis Client</span><br /><br /><br />
            </div>
            <form action="{{ route('ajouter.panier') }}" method="POST">
                @csrf
                <div class="product-details-action-wrap">
                    <input type="hidden" id="idProduit" name="idProduit" value="{{ $produit->id }}">
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
                                if ($wishlist['idproduit'] == $produit->id) {
                                    $isInWishlist = true;
                                    break;
                                }
                            }
                        }
                    @endphp
                    @if($isInWishlist)
                        <div class="single-product-wishlist">
                            <a title="Wishlist" href="{{ route('supprimer.wishlist',$produit->id) }}">
                                <i class="bi bi-heart-fill" style="color:#4fbcc9;"></i>
                            </a>
                        </div>
                    @else
                        <div class="single-product-wishlist">
                            <a title="Wishlist" href="{{ route('ajouter.wishlist.id',$produit->id) }}"><i class="pe-7s-like"></i></a>
                        </div>
                    @endif
                </div>
            </form>
            <div class="product-details-meta">
              <ul>
                <li><span class="title">Garantie:</span> 1 an</li>
                <li>
                  <span class="title">Catégorie:</span>
                  <ul>
                    <li><a href="#">{{ $categorie->NomCategorie }}</a></li>
                  </ul>
                </li>
                <li>
                  <span class="title">Tags :</span>
                  <ul class="tag">
                    <li><a href="#">{{ $tags->Tag1 }}</a>,</li>
                    <li><a href="#">{{ $tags->Tag2 }}</a>,</li>
                    <li><a href="#">{{ $tags->Tag3 }}</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="social-icon-style-4">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-dribbble"></i></a>
              <a href="#"><i class="fa fa-pinterest-p"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="description-review-area pb-85">
    <div class="container">
      <div
        class="description-review-topbar nav"
        data-aos="fade-up"
        data-aos-delay="200"
      >
        <a class="active" data-bs-toggle="tab" href="#des-details1">
          Description
        </a>
        <a data-bs-toggle="tab" href="#des-details2" class="">
          Détails
        </a>
        <a data-bs-toggle="tab" href="#des-details3" class=""> Avis </a>
      </div>
      <div class="tab-content">
        <div id="des-details1" class="tab-pane active">
          <div class="product-description-content text-center">
            <p data-aos="fade-up" data-aos-delay="400">
                {{ $produit->DescriptionPlus }}
            </p>
          </div>
        </div>
        <div id="des-details2" class="tab-pane">
          <div class="specification-wrap table-responsive">
            <p>
                <h5>{{ $description->sousTitre1 }}</h5>
                {{ $description->paragraph1 }}
            </p>
            <p>
                <h5>{{ $description->sousTitre2 }}</h5>
                {{ $description->paragraph2 }}
            </p>
            <p>
                <h5>{{ $description->sousTitre3 }}</h5>
                {{ $description->paragraph3 }}
            </p>
            <p>
                <h5>{{ $description->sousTitre4 }}</h5>
                {{ $description->paragraph4 }}
            </p>
            <p>
                <h5>{{ $description->sousTitre5 }}</h5>
                {{ $description->paragraph5 }}
            </p>
          </div>
        </div>
        <div id="des-details3" class="tab-pane">
          <div class="review-wrapper">
            <h3>Avis des Clients</h3>
            @foreach ($reviews as $review)
                <div class="single-review">
                    <div class="review-img">
                    <img
                        src="{{ asset('assets/store/images/product-details/review.png') }}"
                        alt="client"
                    />
                    </div>
                    <div class="review-content">
                    <div class="review-rating">
                        @for ($i = 0; $i < $review->rating; $i++)
                            <a href="#"><i class="ti-star filled"></i></a>
                        @endfor
                        @php
                            $reste = 5 - $review->rating;
                        @endphp
                        @for ($i = 0; $i < $reste; $i++)
                            <a href="#"><i class="ti-star"></i></a>
                        @endfor
                    </div>
                    <h5><span>{{ $review->nom }}</span> - {{ $review->email }}</h5>
                    <p>
                        {{ $review->comment }}
                    </p>
                    </div>
                </div>
            @endforeach
          </div>
          <div class="ratting-form-wrapper">
            <h3>Ajouter un commentaire</h3>
            <p>
                Votre adresse email ne sera pas publiée. les champs requis sont indiqués <span>*</span>
            </p>
            <div class="your-rating-wrap">
              <span>Votre note</span>
              <div class="your-rating" id="rating-stars">
                <a href="#" data-rating="1"><i class="ti-star"></i></a>
                <a href="#" data-rating="2"><i class="ti-star"></i></a>
                <a href="#" data-rating="3"><i class="ti-star"></i></a>
                <a href="#" data-rating="4"><i class="ti-star"></i></a>
                <a href="#" data-rating="5"><i class="ti-star"></i></a>
              </div>
            </div>
            <div class="ratting-form">
                <form action="{{ route('reviews.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="rating" id="rating-value" value="0" />
                    <input type="hidden" name="idproduit" value="{{ $produit->id }}" />
                    <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="rating-form-style mb-15">
                        <label>Nom <span>*</span></label>
                        <input type="text" name="nom" value="{{ isset($client->NomClient) ?  $client->NomClient: ''}}" required/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="rating-form-style mb-15">
                        <label>Email <span>*</span></label>
                        <input type="email" name="email" value="{{ isset($user->email) ? $user->email : '' }}" required/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="rating-form-style mb-15">
                        <label>Votre note <span>*</span></label>
                        <textarea name="review" required></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="save-email-option">
                        <p>
                            <input type="checkbox" />
                            <label
                            >Enregistrez mon nom, mon adresse e-mail et mon site Web dans ce navigateur pour la prochaine fois que je commenterai.</label
                            >
                        </p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-submit">
                        <input type="submit" value="Soumettre" />
                        </div>
                    </div>
                    </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="related-product-area pb-95">
    <div class="container">
      <div
        class="section-title-2 st-border-center text-center mb-75"
        data-aos="fade-up"
        data-aos-delay="200"
      >
        <h2>Produits Connexes</h2>
      </div>
      <div class="related-product-active swiper-container">
        <div class="swiper-wrapper">
          @foreach ($produits_connexes as $produit_connexes)
            <div class="swiper-slide">
                <div
                class="product-wrap"
                data-aos="fade-up"
                data-aos-delay="200"
                >
                <div class="product-img img-zoom mb-25">
                    <a href="{{ route('produit-details',$produit_connexes->slug) }}">
                    <img src="{{ asset('assets/store/images/product/' . $produit_connexes->ImagePrincipale) }}" alt="" />
                    </a>
                    <div class="product-badge badge-top badge-right badge-pink">
                    <span>{{ $produit_connexes->ParametreStatus }}</span>
                    </div>
                    <div class="product-action-wrap">
                    <button class="product-action-btn-1" title="Wishlist">
                        <i class="pe-7s-like"></i>
                    </button>
                    <button
                        class="product-action-btn-1"
                        title="Quick View"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal{{ $produit_connexes->id }}"
                    >
                        <i class="pe-7s-look"></i>
                    </button>
                    </div>
                    <div class="product-action-2-wrap">
                    <button class="product-action-btn-2" title="Add To Cart">
                        <i class="pe-7s-cart"></i> Ajouter au panier
                    </button>
                    </div>
                </div>
                <div class="product-content">
                    <h3>
                    <a href="{{ route('produit-details',$produit_connexes->slug) }}">{{ Str::limit($produit_connexes->titre,60) }}</a>
                    </h3>
                    <div class="product-price">
                        <span class="old-price">{{ $produit_connexes->AncienPrix }}</span>
                        <span class="new-price">{{ $produit_connexes->NouveauPrix }}</span>
                    </div>
                </div>
                </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  @include('pages.section.produit-modal')
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const stars = document.querySelectorAll('#rating-stars a');
        const ratingValue = document.getElementById('rating-value');

        stars.forEach(star => {
            star.addEventListener('click', function (event) {
            event.preventDefault();
            const rating = this.getAttribute('data-rating');
            ratingValue.value = rating;

            // Reset all stars
            stars.forEach(s => s.querySelector('i').classList.remove('filled'));

            // Highlight selected stars
            for (let i = 0; i < rating; i++) {
                stars[i].querySelector('i').classList.add('filled');
            }
            });
        });
        });
    </script>
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
