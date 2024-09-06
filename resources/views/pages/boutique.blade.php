@extends('layouts.master')


@section('content')
<div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
    <div class="container">
      <div class="breadcrumb-content text-center">
        <h2 data-aos="fade-up" data-aos-delay="200">Boutique</h2>
        <ul data-aos="fade-up" data-aos-delay="400">
          <li><a href="{{ route('acceuil') }}">Acceuil</a></li>
          <li><i class="ti-angle-right"></i></li>
          <li>Boutique</li>
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
  <div class="banner-area pt-100 pb-75 padding-20-row-col">
    <div class="container">
      <div class="row">
        <div
          class="col-lg-3 col-md-6 col-sm-6 order-md-1 order-sm-1 col-12"
        >
          <div
            class="banner-wrap mb-20"
            data-aos="fade-up"
            data-aos-delay="400"
          >
          @foreach ($categories as $categorie)
              @if ($categorie->NomCategorie === 'Equipements Réseaux')
                <a href="{{ route('categories.details',$categorie->slug) }}"
                ><img src="{{ asset('assets/store/images/banner/Banner-13.jpg') }}" alt=""
                /></a>
              @endif
          @endforeach
            <div class="banner-content-9">
              <h3>Équipements Réseaux</h3>
              <h4>Nouveau Arrivage</h4>
            </div>
            <div class="banner-price-1">
              <span>Solde</span>
            </div>
          </div>
        </div>
        <div
          class="col-lg-6 col-md-12 col-sm-12 order-md-0 order-sm-0 col-12"
        >
          <div
            class="banner-wrap mb-20"
            data-aos="fade-up"
            data-aos-delay="200"
          >
          @foreach ($categories as $categorie)
              @if ($categorie->NomCategorie === 'Équipements Bureautiques')
                <a href="{{ route('categories.details',$categorie->slug) }}"
                  ><img src="{{ asset('assets/store/images/banner/banner-14.jpg') }}" alt=""
                /></a>
              @endif
          @endforeach
            <div class="banner-content-9">
              <h3>Équipements Bureautiques</h3>
              <h4>Nouveau Arrivage</h4>
            </div>
            <div class="banner-price-1">
              <span>Solde</span>
            </div>
          </div>
        </div>
        <div
          class="col-lg-3 col-md-6 col-sm-6 order-md-2 order-sm-2 col-12"
        >
          <div
            class="banner-wrap mb-20"
            data-aos="fade-up"
            data-aos-delay="600"
          >
          @foreach ($categories as $categorie)
              @if ($categorie->NomCategorie === 'Consommables Informatiques')
                <a href="{{ route('categories.details',$categorie->slug) }}"
                  ><img src="{{ asset('assets/store/images/banner/banner-15.jpg') }}" alt=""
                /></a>
              @endif
          @endforeach
            <div class="banner-content-9">
              <h3>Consommables Informatiques</h3>
              <h4>Nouveau Arrivage</h4>
            </div>
            <div class="banner-price-1">
              <span>Solde</span>
            </div>
          </div>
        </div>
        <div
          class="col-lg-6 col-md-12 col-sm-12 order-md-3 order-sm-3 col-12"
        >
          <div
            class="banner-wrap mb-20"
            data-aos="fade-up"
            data-aos-delay="800"
          >
          @foreach ($categories as $categorie)
              @if ($categorie->NomCategorie === 'Accessoires & Composants')
                <a href="{{ route('categories.details',$categorie->slug) }}"
                  ><img src="{{ asset('assets/store/images/banner/banner-16.jpg') }}" alt=""
                /></a>
              @endif
          @endforeach
            <div class="banner-content-9">
              <h3>Accessoires &amp; Composants</h3>
              <h4>Nouveau Arrivage</h4>
            </div>
            <div class="banner-price-1">
              <span>Solde</span>
            </div>
          </div>
        </div>
        <div
          class="col-lg-6 col-md-12 col-sm-12 order-md-4 order-sm-4 col-12"
        >
          <div
            class="banner-wrap mb-20"
            data-aos="fade-up"
            data-aos-delay="1000"
          >
          @foreach ($categories as $categorie)
              @if ($categorie->NomCategorie === 'Divers')
                <a href="{{ route('categories.details',$categorie->slug) }}"
                  ><img src="{{ asset('assets/store/images/banner/banner-17.jpg') }}" alt=""
                /></a>
              @endif
          @endforeach
            <div class="banner-content-9">
              <h3>Divers</h3>
              <h4>Nouveau Arrivage</h4>
            </div>
            <div class="banner-price-1">
              <span>Solde</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shop-area pt-100 pb-100">
    <div class="container" data-aos="fade-up"data-aos-delay="200">
      <div class="row flex-row-reverse">
        <div class="col-12">
          <div class="shop-topbar-wrapper mb-40">
            <div class="shop-topbar-left">
              <div class="showing-item">
                <span>Affichage de 1 à 12 sur {{ $nbr_produits }} résultats</span>
              </div>
            </div>
            <div class="shop-topbar-right">
                <div
                class="sidebar-widget mb-40"
                >
                <div class="search-wrap-2" style="margin-right: 20px;">
                    <form class="search-2-form" action="{{ route('products.search') }}" method="GET">
                        <input name="query" placeholder="Recherche*" type="text" value="{{ isset($query) ? $query : '' }}"/>
                        <button class="button-search" type="submit">
                            <i class="ti-search"></i>
                        </button>
                    </form>
                </div>
              </div>
              <div class="shop-sorting-area">
                <select class="nice-select nice-select-style-1">
                  <option>Tri par défaut</option>
                  <option>Trier par popularité</option>
                  <option>Trier par note moyenne</option>
                  <option>Trier par dernier</option>
                </select>
              </div>
              <div class="shop-view-mode nav">
                <a class="active" href="#shop-1" data-bs-toggle="tab"
                  ><i class="ti-layout-grid3"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="shop-bottom-area">
            <div class="tab-content jump">
              <div id="shop-1" class="tab-pane active">
                <div class="row">
                  @foreach ($produits as $produit)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div
                        class="product-wrap mb-35"
                        data-aos="fade-up"
                        data-aos-delay="200"
                        >
                        <div class="product-img img-zoom mb-25">
                            <a href="{{ route('produit-details',$produit->slug) }}">
                            <img
                                src="{{ asset('assets/store/images/product/' . $produit->ImagePrincipale) }}"
                                alt=""
                            />
                            </a>
                            <div
                            class="product-badge badge-top badge-right badge-pink"
                            >
                            <span>{{ $produit->ParametreStatus }}</span>
                            </div>
                            <div class="product-action-wrap">
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
                                <div>
                                    <button type="button" class="product-action-btn-1" title="Wishlist">
                                        <a href="{{ route('supprimer.wishlist', $produit->id) }}">
                                            <i class="bi bi-heart-fill" style="color:#4fbcc9;"></i>
                                        </a>
                                    </button>
                                </div>
                            @else
                                <div>
                                    <form action="{{ route('ajouter.wishlist') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="idProduit" value="{{ $produit->id }}">
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
                                data-bs-target="#exampleModal{{ $produit->id }}"
                            >
                                <i class="pe-7s-look"></i>
                            </button>
                            </div>
                            <div class="product-action-2-wrap">
                                <form action="{{ route('ajouter.panier') }}" method="POST">
                                    @csrf
                                    <input type="hidden" id="idProduit" name="idProduit" value="{{ $produit->id }}">
                                    <input type="hidden" id="quantite" name="quantite" value="1">
                                    <button type="submit" class="product-action-btn-2"><i class="pe-7s-cart"></i>Ajouter au panier</button>
                                </form>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3>
                            <a href="{{ route('produit-details',$produit->slug) }}"
                                >{{ Str::limit($produit->titre,60) }}</a
                            >
                            </h3>
                            @if ($produit->AncienPrix === null)
                                <div class="product-price">
                                    <span>{{ $produit->NouveauPrix }}</span>
                                </div>
                            @else
                                <div class="product-price">
                                    <span class="old-price">{{ $produit->AncienPrix }}</span>
                                    <span class="new-price">{{ $produit->NouveauPrix }}</span>
                                </div>
                            @endif
                        </div>
                        </div>
                    </div>
                  @endforeach
                </div>
                <div
                  class="d-flex justify-content-center"
                  data-aos="fade-up"
                  data-aos-delay="200"
                >
                  {{ $produits->links() }}
                </div>
              </div>
            </div>
          </div>
        </div>
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
