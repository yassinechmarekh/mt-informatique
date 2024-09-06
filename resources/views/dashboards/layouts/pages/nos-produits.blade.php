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
                    <li class="breadcrumb-item active" aria-current="page">
                        @if($user->role === 'Admin')
                            <a href="{{ route('admin.dashboard.produits.nos-produits') }}">Nos Produits</a>
                        @elseif($user->role === 'Employe')
                            <a href="{{ route('employe.dashboard.produits.nos-produits') }}">Nos Produits</a>
                        @endif
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
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @elseif ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($erros->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
              <h5
                class="card-header d-flex justify-content-between align-items-center"
              >
                Ajouter un produit
                <button type="button" class="btn btn-sm btn-outline-light">
                    @if($user->role === 'Admin')
                        <a href="{{ route('admin.dashboard.produits.ajouter-produit') }}">Ajouter</a>
                    @elseif($user->role === 'Employe')
                        <a href="{{ route('employe.dashboard.produits.ajouter-produit') }}">Ajouter</a>
                    @endif
                </button>
              </h5>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-8 col-sm-12 col-12">
            <div class="row">
              @foreach ($produits as $produit)
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="product-thumbnail">
                    <div class="product-img-head">
                        <div class="product-img">
                        <img
                            src="{{ asset('assets/dashboard/images/' . $produit->ImageDashboard) }}"
                            alt=""
                            class="img-fluid"
                        />
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-content-head">
                        <h3 class="product-title">
                            {{ Str::limit($produit->titre,50) }}
                        </h3>
                        <div class="product-price">
                            {{ $produit->NouveauPrix }}
                            <del class="product-del">{{ $produit->AncienPrix }}</del>
                        </div>
                        </div>
                        <div class="product-btn">
                            @if($user->role === 'Admin')
                                <a href="{{ route('admin.dashboard.produits.modifier-produit',$produit->slug) }}" class="btn btn-primary">Modifier</a>
                                <a
                                    href="{{ route('admin.dashboard.produits.produit-details',$produit->slug) }}"
                                    class="btn btn-outline-light"
                                    >Details</a
                                >
                            @elseif($user->role === 'Employe')
                                <a href="{{ route('employe.dashboard.produits.modifier-produit',$produit->slug) }}" class="btn btn-primary">Modifier</a>
                                <a
                                    href="{{ route('employe.dashboard.produits.produit-details',$produit->slug) }}"
                                    class="btn btn-outline-light"
                                    >Details</a
                                >
                            @endif

                        <button
                            type="button"
                            class="btn btn-outline-danger"
                            data-bs-toggle="modal"
                            data-bs-target="#supprimer{{ $produit->id }}"
                        >
                            <i class="fas fa-trash-alt"></i>
                        </button>
                        </div>
                    </div>
                    </div>
                </div>
              @endforeach
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <nav aria-label="Page navigation example">
                  <div class="d-flex justify-content-center">
                    {{ $produits->links() }}
                  </div>
                </nav>
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
