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
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-link"
                            >Dashboard</a>
                        @elseif($user->role === 'Employe')
                            <a href="{{ route('employe.dashboard') }}" class="breadcrumb-link"
                            >Dashboard</a>
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
        <div class="ecommerce-widget">
          <div class="row">
            <!-- ============================================================== -->
            <!-- four widgets   -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- total views   -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-inline-block">
                    <h5 class="text-muted">Admin</h5>
                    <h2 class="mb-0">{{ $admins }}</h2>
                  </div>
                  <div
                    class="float-right icon-circle-medium icon-box-lg bg-info-light mt-1"
                  >
                    <i class="fa fa-user fa-fw fa-sm text-info"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- end total views   -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- total followers   -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-inline-block">
                    <h5 class="text-muted">Employées</h5>
                    <h2 class="mb-0">{{ $employes }}</h2>
                  </div>
                  <div
                    class="float-right icon-circle-medium icon-box-lg bg-primary-light mt-1"
                  >
                    <i class="fa fa-users fa-fw fa-sm text-primary"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- end total followers   -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- partnerships   -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-inline-block">
                    <h5 class="text-muted">Catégories</h5>
                    <h2 class="mb-0">{{ $categories }}</h2>
                  </div>
                  <div
                    class="float-right icon-circle-medium icon-box-lg bg-secondary-light mt-1"
                  >
                    <i class="fa fa-cubes fa-fw fa-sm text-secondary"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- end partnerships   -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- total earned   -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-inline-block">
                    <h5 class="text-muted">Produits</h5>
                    <h2 class="mb-0">{{ $produits }}</h2>
                  </div>
                  <div
                    class="float-right icon-circle-medium icon-box-lg bg-brand-light mt-1"
                  >
                    <i class="fa fa-cube fa-fw fa-sm text-brand"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- end total earned   -->
            <!-- ============================================================== -->
          </div>
          <!-- ============================================================== -->
          <!-- end widgets   -->
          <!-- ============================================================== -->

          <div class="row">
            <!-- ============================================================== -->
            <!-- total revenue  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- category revenue  -->
            <!-- ============================================================== -->
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
              <div class="card">
                <h5 class="card-header">Revenus par Catégorie</h5>
                <div class="card-body">
                  <div id="c3chart_category" style="height: 420px"></div>
                </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- end category revenue  -->
            <!-- ============================================================== -->

            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
              <div class="card">
                <h5 class="card-header">Revenu total</h5>
                <div class="card-body">
                  <div id="morris_totalrevenue"></div>
                </div>
                <div class="card-footer">
                  <p class="display-7 font-weight-bold">
                    <span class="text-primary d-inline-block"
                      >26,000 DH</span
                    ><span class="text-success float-right">+9.45%</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('dashboards.layouts.footer')
  </div>
