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
                        <a href="{{ route('admin.dashboard.commandes') }}" class="breadcrumb-link"
                        >Commandes</a>
                    @elseif($user->role === 'Employe')
                        <a href="{{ route('employe.dashboard.commandes') }}" class="breadcrumb-link"
                        >Commandes</a>
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
        <!-- end Accessoires & Composants  -->
        <!-- ============================================================== -->
      </div>
      <div class="row">
        <!-- ============================================================== -->
        <!-- data table  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <h5 class="mb-0">Listes des commandes</h5>
              <p>
                Vous pouvez confimer ou bien annuler la commande d'un client
                par un appel téléphonique depuis la case Action>
              </p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table
                  id="example"
                  class="table table-striped table-bordered second"
                  style="width: 100%"
                >
                  <thead>
                    <tr>
                      <th>Id Commande</th>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Adresse</th>
                      <th>Produit</th>
                      <th>Prix</th>
                      <th>Quantité</th>
                      <th>Total</th>
                      <th>Tél</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($commandes as $commande)
                        <tr>
                            <td>{{ $commande->id }}</td>
                            <td>{{ $commande->Nom }}</td>
                            <td>{{ $commande->Prenom }}</td>
                            <td>{{ $commande->Adresse }}</td>
                            <td>{{ $commande->ProduitTitre }}</td>
                            <td>{{ $commande->Prix }}</td>
                            <td>{{ $commande->Quantite }}</td>
                            <td>{{ $commande->Total }},00 DH</td>
                            <td>{{ $commande->Tel }}</td>
                            <td>
                                @if ($commande->status === 'En Attend')
                                    <a href="{{ route('confirmer.commande',$commande->id) }}" class="btn btn-sm btn-outline-success" style="margin-bottom: 5px;">
                                        <i class="fas fa-check-circle"></i>
                                    </a>
                                    <a href="{{ route('annuler.commande',$commande->id) }}" class="btn btn-sm btn-outline-danger">
                                        <i class="far fa-window-close"></i>
                                    </a>
                                @else
                                    {{ $commande->status }}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Id Commande</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse</th>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Total</th>
                        <th>Tél</th>
                        <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- end data table  -->
        <!-- ============================================================== -->
      </div>
        <div class="d-flex justify-content-center">
            {{ $commandes->links() }}
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    @include('dashboards.layouts.footer')
  </div>
