<div class="dashboard-wrapper">
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
                        <a href="{{ route('admin.dashboard.categories') }}" class="breadcrumb-link"
                        >Catégories</a>
                    @elseif($user->role === 'Employe')
                        <a href="{{ route('employe.dashboard.categories') }}" class="breadcrumb-link"
                        >Catégories</a>
                    @endif

                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('acceuil') }}">MT informatique</a>
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
      @elseif ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($erros->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif


      <!-- ============================================================== -->
      <!-- basic media -->
      <!-- ============================================================== -->
      <div class="row">
        <!-- ============================================================== -->
        <!-- Équipements Bureautiques  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
          <div class="card border-3 border-top border-top-primary">
            <div class="card-body">
              <h5 class="text-muted">Équipements Bureautiques</h5>
              <div class="metric-value d-inline-block">
                <h1 class="mb-1">2834</h1>
              </div>
              <div
                class="metric-label d-inline-block float-right text-success font-weight-bold"
              >
                <span
                  class="icon-circle-small icon-box-xs text-success bg-success-light"
                  ><i class="fa fa-fw fa-arrow-up"></i></span
                ><span class="ml-1">5.86%</span>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- end Équipements Bureautiques  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!--  Équipements Réseaux  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
          <div class="card border-3 border-top border-top-primary">
            <div class="card-body">
              <h5 class="text-muted">
                Équipements <br />
                Réseaux
              </h5>
              <div class="metric-value d-inline-block">
                <h1 class="mb-1">942</h1>
              </div>
              <div
                class="metric-label d-inline-block float-right text-success font-weight-bold"
              >
                <span
                  class="icon-circle-small icon-box-xs text-success bg-success-light"
                  ><i class="fa fa-fw fa-arrow-up"></i></span
                ><span class="ml-1">10%</span>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- end Équipements Réseaux  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Consommables Informatiques  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
          <div class="card border-3 border-top border-top-primary">
            <div class="card-body">
              <h5 class="text-muted">Consommables Informatiques</h5>
              <div class="metric-value d-inline-block">
                <h1 class="mb-1">1928</h1>
              </div>
              <div
                class="metric-label d-inline-block float-right text-success font-weight-bold"
              >
                <span
                  class="icon-circle-small icon-box-xs text-success bg-success-light"
                  ><i class="fa fa-fw fa-arrow-up"></i></span
                ><span class="ml-1">5%</span>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- end Consommables Informatiques  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Accessoires & Composants  -->
        <!-- ============================================================== -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
          <div class="card border-3 border-top border-top-primary">
            <div class="card-body">
              <h5 class="text-muted">Accessoires & Composants</h5>
              <div class="metric-value d-inline-block">
                <h1 class="mb-1">1340</h1>
              </div>
              <div
                class="metric-label d-inline-block float-right text-danger font-weight-bold"
              >
                <span
                  class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light"
                  ><i class="fa fa-fw fa-arrow-down"></i></span
                ><span class="ml-1">4%</span>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- Accessoires & Composants  -->
        <!-- ============================================================== -->
      </div>
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <h5
              class="card-header d-flex justify-content-between align-items-center"
            >
              Ajouter une catégorie
              <button
                type="button"
                class="btn btn-sm btn-outline-light"
                data-bs-toggle="modal"
                data-bs-target="#ajouter"
              >
                Ajouter
              </button>
            </h5>
          </div>
        </div>
      </div>
      <!-- Model ajouter -->
      @include('dashboards.layouts.pages.section.modals.categories.ajouter-catecorie')

      <!-- ============================================================== -->
      <!-- end basic media -->
      <!-- ============================================================== -->
      <div class="dashboard-short-list">
        <div class="row">
          <!-- ============================================================== -->
          <!-- shortable list  -->
          <!-- ============================================================== -->
          <div class="col-12">
            <section class="card card-fluid">
              <h5 class="card-header drag-handle">Listes des catégories</h5>
              <ul
                class="sortable-lists list-group list-group-flush list-group-bordered"
                id="items"
              >
                @foreach ($categories as $categorie)
                  <li class="list-group-item align-items-center drag-handle">
                    <span class="drag-indicator"></span>
                    <div>{{ $categorie->NomCategorie }}</div>
                    <div class="btn-group ml-auto">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-light"
                        data-bs-toggle="modal"
                        data-bs-target="#modifier{{ $categorie->id }}"
                      >
                        Modifier
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-light"
                        data-bs-toggle="modal"
                        data-bs-target="#supprimer{{ $categorie->id }}"
                      >
                        <i class="far fa-trash-alt"></i>
                      </button>
                    </div>
                  </li>
                @endforeach
              </ul>
            </section>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
          {{ $categories->links() }}
      </div>
    </div>
    <!-- Modal mofifier -->
    @include('dashboards.layouts.pages.section.modals.categories.modifier-categorie')
    <!-- Modal supprimer -->
    @include('dashboards.layouts.pages.section.modals.categories.supprimer-categorie')
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    @include('dashboards.layouts.footer')
  </div>
