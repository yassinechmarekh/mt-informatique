@extends('layouts.master')


@section('content')
<div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
    <div class="container">
      <div class="breadcrumb-content text-center">
        <h2 data-aos="fade-up" data-aos-delay="200">Boutique</h2>
        <ul data-aos="fade-up" data-aos-delay="400">
          <li><a href="index.html">Acceuil</a></li>
          <li><i class="ti-angle-right"></i></li>
          <li>Détails Catégorie</li>
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
  <div class="shop-area shop-page-responsive pt-100 pb-100">
    <div class="container">
      <div class="row flex-row-reverse">
        <div class="col-lg-9">
          <div class="shop-topbar-wrapper mb-40">
            <div data-aos="fade-up" class="shop-topbar-left">
              <div class="showing-item">
                <span>Affichage de 1 à 4 sur {{ $nbr_produits }} résultats</span>
              </div>
            </div>
            <div data-aos="fade-up" class="shop-topbar-right">
              <div class="shop-sorting-area">
                <select class="nice-select nice-select-style-1">
                  <option>Tri par défaut</option>
                  <option>Trier par popularité</option>
                  <option>Trier par note moyenne</option>
                  <option>Trier par dernier</option>
                </select>
              </div>
            </div>
          </div>
          <div class="shop-bottom-area">
            <div class="tab-content jump">
              <div class="tab-pane active">
                @foreach ($produits as $produit)
                    <div class="shop-list-wrap mb-30" data-aos="fade-up"data-aos-delay="200">
                        <div class="row">
                            <div class="col-lg-4 col-sm-5">
                            <div class="product-list-img">
                                <a href="{{ route('produit-details',$produit->slug) }}">
                                <img
                                    src="{{ asset('assets/store/images/product/' . $produit->ImagePrincipale) }}"
                                    alt="Product Style"
                                />
                                </a>
                                <div
                                class="product-list-badge badge-right badge-pink"
                                >
                                <span>{{ $produit->ParametreStatus }}</span>
                                </div>
                                <div class="product-list-quickview">
                                <button
                                    class="product-action-btn-2"
                                    title="Quick View"
                                    data-bs-toggle="modal"
                                    data-bs-target="#exampleModal{{$produit->id}}"
                                >
                                    <i class="pe-7s-look"></i>
                                </button>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-8 col-sm-7">
                            <div class="shop-list-content">
                                <h3>
                                <a href="{{ route('produit-details',$produit->slug) }}"
                                    >{{ $produit->titre }}</a
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
                                @php
                                    $reviews = App\Models\Review::where('product_id',$produit->id)->get();
                                @endphp
                                <div class="product-details-review" style="margin-top: 20px; display:flex;">
                                    <div class="review-rating" style="margin-right: 1rem;">
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
                                <p>
                                    {{ Str::limit($produit->DescriptionModal,150) }}
                                </p>
                                <div class="product-list-action" style="display: flex;">
                                    <form action="{{ route('ajouter.panier') }}" method="POST">
                                        @csrf
                                        <input type="hidden" id="idProduit" name="idProduit" value="{{ $produit->id }}">
                                        <input type="hidden" id="quantite" name="quantite" value="1">
                                        <button
                                            type="submit"
                                            class="product-action-btn-3"
                                            style="margin-right: 10px;"
                                            title="Ajouter au panier"
                                        >
                                            <i class="pe-7s-cart"></i>
                                        </button>
                                    </form>
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
                                            <button type="button" class="product-action-btn-3" title="Wishlist">
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
                                                <button type="submit" class="product-action-btn-3" title="Wishlist">
                                                    <i class="pe-7s-like"></i>
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                @endforeach

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
        <div class="col-lg-3">
          <div class="sidebar-wrapper">
            <div
              class="sidebar-widget mb-40"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="search-wrap-2">
                <form class="search-2-form" action="{{ route('products.search') }}" method="GET">
                  <input placeholder="Recherche*" type="text" name="query" value="{{ isset($query) ? $query : '' }}"/>
                  <button class="button-search" type="submit">
                    <i class="ti-search"></i>
                  </button>
                </form>
              </div>
            </div>
            <div
              class="sidebar-widget sidebar-widget-border mb-40 pb-35"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="sidebar-widget-title mb-30">
                <h3>Filtrer par prix</h3>
              </div>
              <div class="price-filter">
                <form action="{{ route('filter.prices',$categorie->slug) }}" method="POST">
                    @csrf
                    <div id="slider-range"></div>
                    <div class="price-slider-amount">
                        <div class="label-input">
                            <label>Prix:</label>
                            <input
                                type="text"
                                id="amount"
                                name="price"
                                placeholder="Add Your Price"
                                readonly
                            />
                            <input type="hidden" id="min" name="min" value="{{ request('min', 0) }}">
                            <input type="hidden" id="max" name="max" value="{{ request('max', 30000) }}">
                        </div>
                        <button type="submit">Filtre</button>
                    </div>
                </form>
               </div>
            </div>
            <div
              class="sidebar-widget sidebar-widget-border mb-40 pb-35"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="sidebar-widget-title mb-25">
                <h3>Catégories de produits</h3>
              </div>
              <div class="sidebar-list-style">
                <ul>
                @foreach ($categories as $c)
                    <li>
                      <a href="{{ route('categories.details',$c->slug) }}">{{ $c->NomCategorie }}</a>
                    </li>
                @endforeach
                </ul>
              </div>
            </div>
            <div
              class="sidebar-widget"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="sidebar-widget-title mb-25">
                <h3>Tags</h3>
              </div>
              <div class="sidebar-widget-tag">
                <a href="{{ route('categories.details',$categorie->slug) }}">{{ $tags->Tag1 }}, </a>
                <a href="{{ route('categories.details',$categorie->slug) }}">{{ $tags->Tag2 }}, </a>
                <a href="{{ route('categories.details',$categorie->slug) }}">{{ $tags->Tag3 }}, </a>
                <a href="{{ route('categories.details',$categorie->slug) }}">{{ $tags->Tag4 }}, </a>
                <a href="{{ route('categories.details',$categorie->slug) }}">{{ $tags->Tag5 }}, </a>
                <a href="{{ route('categories.details',$categorie->slug) }}">{{ $tags->Tag6 }}, </a>
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

@section('script')
    <script>
        $(function() {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 30000, // Adjust the maximum value according to your needs
                values: [{{ request('min', 0) }}, {{ request('max', 30000) }}],
                slide: function(event, ui) {
                    $("#amount").val(ui.values[0] + " DH - " + ui.values[1] + " DH");
                    $("#min").val(ui.values[0]);
                    $("#max").val(ui.values[1]);
                }
            });
            $("#amount").val($("#slider-range").slider("values", 0) + " DH - " +
                $("#slider-range").slider("values", 1) + " DH");
        });
    </script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
