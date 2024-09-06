@extends('dashboards.layouts.master')

@section('produits')
active
@endsection

@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
      <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader  -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
              <h2 class="pageheader-title">
                @if($user->role === 'Admin')
                    Admin Dashboard
                @elseif($user->role === 'Employe')
                    Employe Dashboard
                @endif
              </h2>
              <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        @if($user->role === 'Admin')
                            <a href="{{ route('admin.dashboard.produits.nos-produits') }}" class="breadcrumb-link">Produits</a>
                        @elseif($user->role === 'Employe')
                            <a href="{{ route('employe.dashboard.produits.nos-produits') }}" class="breadcrumb-link">Produits</a>
                        @endif
                    </li>
                    <li class="breadcrumb-item">
                        @if($user->role === 'Admin')
                            <a href="{{ route('admin.dashboard.produits.nos-produits') }}" class="breadcrumb-link">Nos Produits</a>
                        @elseif($user->role === 'Employe')
                            <a href="{{ route('employe.dashboard.produits.nos-produits') }}" class="breadcrumb-link">Nos Produits</a>
                        @endif
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Détails Produits
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader  -->
        <!-- ============================================================== -->
        <div class="row">
          <div
            class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12"
          >
            <div class="row">
              <div
                class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pr-xl-0 pr-lg-0 pr-md-0 m-b-30"
              >
                <div class="product-slider">
                  <div
                    id="productslider-1"
                    class="product-carousel carousel slide"
                    data-ride="carousel"
                  >
                    <ol class="carousel-indicators">
                      <li
                        data-target="#carouselExampleIndicators"
                        data-slide-to="0"
                        class="active"
                      ></li>
                      <li
                        data-target="#carouselExampleIndicators"
                        data-slide-to="1"
                      ></li>
                      <li
                        data-target="#carouselExampleIndicators"
                        data-slide-to="2"
                      ></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img
                          class="d-block"
                          src="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage1) }}"
                          alt="First slide"
                          style="width:285px; top:313px;"
                        />
                      </div>
                      <div class="carousel-item">
                        <img
                          class="d-block"
                          src="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage2) }}"
                          alt="Second slide"
                          style="width:285px; top:313px;"
                        />
                      </div>
                      <div class="carousel-item">
                        <img
                          class="d-block"
                          src="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage3) }}"
                          alt="Third slide"
                          style="width:285px; top:313px;"
                        />
                      </div>
                      <div class="carousel-item">
                        <img
                          class="d-block"
                          src="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage4) }}"
                          alt="Third slide"
                          style="width:285px; top:313px;"
                        />
                      </div>
                      <div class="carousel-item">
                        <img
                          class="d-block"
                          src="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage5) }}"
                          alt="Third slide"
                          style="width:285px; top:313px;"
                        />
                      </div>
                    </div>
                    <a
                      class="carousel-control-prev"
                      href="#carouselExampleIndicators"
                      role="button"
                      data-slide="prev"
                    >
                      <span
                        class="carousel-control-prev-icon"
                        aria-hidden="true"
                      ></span>
                      <span class="sr-only">Précédent</span>
                    </a>
                    <a
                      class="carousel-control-next"
                      href="#carouselExampleIndicators"
                      role="button"
                      data-slide="next"
                    >
                      <span
                        class="carousel-control-next-icon"
                        aria-hidden="true"
                      ></span>
                      <span class="sr-only">Suivant</span>
                    </a>
                  </div>
                </div>
              </div>
              <div
                class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pl-xl-0 pl-lg-0 pl-md-0 border-left m-b-30"
              >
                <div class="product-details">
                  <div class="border-bottom pb-3 mb-3">
                    <h2 class="mb-3">
                      {{ $produit->titre }}
                    </h2>
                    <h3 class="mb-0 text-primary">
                      {{ $produit->NouveauPrix }}
                      <del class="product-del">{{ $produit->AncienPrix }}</del>
                    </h3>
                  </div>
                  <div class="product-description">
                    <h4 class="mb-1">Déscription</h4>
                    <p>
                      {{ Str::limit($produit->DescriptionModal,400) }}
                    </p>
                    <div class="d-flex">
                        @if($user->role === 'Admin')
                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                                <a href="{{ route('admin.dashboard.produits.modifier-produit',$produit->slug) }}" class="btn btn-primary btn-block btn-lg"
                                >Modifier</a
                                >
                            </div>
                        @elseif($user->role === 'Employe')
                                <a href="{{ route('employe.dashboard.produits.modifier-produit',$produit->slug) }}" class="btn btn-primary btn-block btn-lg"
                                    >Modifier</a
                                >
                        @endif
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <button
                                type="button"
                                class="btn btn-danger btn-block btn-lg"
                                data-bs-toggle="modal"
                                data-bs-target="#supprimer{{ $produit->id }}"
                            >
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-b-60"
              >
                <div class="simple-card">
                  <ul class="nav nav-tabs" id="myTab5" role="tablist">
                    <li class="nav-item">
                      <a
                        class="nav-link active border-left-0"
                        id="product-tab-1"
                        data-toggle="tab"
                        href="#tab-1"
                        role="tab"
                        aria-controls="product-tab-1"
                        aria-selected="true"
                        >Déscription</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        id="product-tab-2"
                        data-toggle="tab"
                        href="#tab-2"
                        role="tab"
                        aria-controls="product-tab-2"
                        aria-selected="false"
                        >Avis</a
                      >
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent5">
                    <div
                      class="tab-pane fade show active"
                      id="tab-1"
                      role="tabpanel"
                      aria-labelledby="product-tab-1"
                    >
                      <p>
                        {{ $produit->DescriptionPlus }}
                      </p>
                    </div>
                    <div
                      class="tab-pane fade"
                      id="tab-2"
                      role="tabpanel"
                      aria-labelledby="product-tab-2"
                    >
                        @if ($reviews->isEmpty())
                            <p class="review-text m-0">
                                Aucun commentaire pour le moment
                            </p>
                        @else
                            @foreach ($reviews as $review)
                                <div class="review-block">
                                    <p class="review-text font-italic m-0">
                                        “{{ $review->comment }}”
                                    </p>
                                    <div class="rating-star mb-4">
                                        @for ($i = 0; $i < 5; $i++)
                                            @if ($i < intval($review->rating))
                                                <i class="bi bi-star-fill"></i>
                                            @else
                                            <i class="bi bi-star"></i>
                                            @endif
                                        @endfor
                                    </div>
                                    <span class="text-dark font-weight-bold"
                                    >{{ $review->nom }}</span
                                    > - {{ $review->email }}
                                </div>
                                <hr>
                            @endforeach
                        @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal supprimer -->
      @include('dashboards.layouts.pages.section.modals.produits.supprimer-produit')
      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
      @include('dashboards.layouts.footer')
    </div>
  </div>
@endsection

@section('script')
<script>
    jQuery(
      '<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>'
    ).insertAfter(".quantity input");
    jQuery(".quantity").each(function () {
      var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find(".quantity-up"),
        btnDown = spinner.find(".quantity-down"),
        min = input.attr("min"),
        max = input.attr("max");

      btnUp.click(function () {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

      btnDown.click(function () {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });
    });
  </script>
  <script src="{{asset('assets/dashboard/libs/js/modal.js')}}"></script>
  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  ></script>
@endsection

@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection
