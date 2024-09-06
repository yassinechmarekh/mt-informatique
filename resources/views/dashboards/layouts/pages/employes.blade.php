<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
      <!-- ============================================================== -->
      <!-- pageheader  -->
      <!-- ============================================================== -->
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="page-header">
            <h2 class="pageheader-title">Admin Dashboard</h2>
            <div class="page-breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard.employes') }}" class="breadcrumb-link"
                      >Employées</a
                    >
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
      @elseif(session('changeInfo'))
        <div class="alert alert-success" role="alert">
            {{ session('changeInfo') }}
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
              Ajouter un employé
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
      @include('dashboards.layouts.pages.section.modals.employes.ajouter-employe')
      <!-- ============================================================== -->
      <!-- end modal ajouter employe -->
      <!-- ============================================================== -->
      <!-- Model modifier -->
      @include('dashboards.layouts.pages.section.modals.employes.modifier-employe')
      <!-- ============================================================== -->
      <!-- end modal modifier employe -->
      <!-- ============================================================== -->
      <div class="row">
        <!-- ============================================================== -->
        <!-- campaign activities   -->
        <!-- ============================================================== -->
        <div class="col-lg-12">
          <div class="section-block">
            <h3 class="section-title">Liste des employées</h3>
          </div>
          <div class="card">
            <div class="campaign-table table-responsive">
              <table class="table">
                <thead>
                  <tr class="border-0">
                    <th class="border-0">Id Employe</th>
                    <th class="border-0">Prénom</th>
                    <th class="border-0">Nom</th>
                    <th class="border-0">Genre</th>
                    <th class="border-0">Salaire</th>
                    <th class="border-0">Email</th>
                    <th class="border-0">Rôle</th>
                    <th class="border-0">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($employes as $employe)
                    <tr>
                        <td>{{ $employe->id }}</td>
                        <td>{{ $employe->PrenomEmploye }}</td>
                        <td>{{ $employe->NomEmploye }}</td>
                        <td>{{ $employe->GenreEmploye }}</td>
                        <td>{{ $employe->SalaireEmploye }}</td>
                        <td>
                            @foreach ($users as $user)
                                @if($user->id === $employe->IdUser)
                                    {{ $user->email }}
                                @endif
                            @endforeach
                        </td>
                        <td>{{ $employe->RoleEmploye }}</td>
                        <td>
                        <div class="dropdown float-right">
                            <a
                            href="#"
                            class="dropdown-toggle card-drop"
                            data-toggle="dropdown"
                            aria-expanded="true"
                            >
                            <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a
                                href="{{ route('admin.dashboard.employes.profile',$employe->id) }}"
                                class="dropdown-item"
                                >Profile</a
                            >
                            <!-- item-->
                            <a
                                href="javascript:void(0);"
                                class="dropdown-item"
                                data-bs-toggle="modal"
                                data-bs-target="#modifier{{ $employe->id }}"
                                >Modifier</a
                            >
                            <!-- item-->
                            <a
                                href="javascript:void(0);"
                                class="dropdown-item"
                                data-bs-toggle="modal"
                                data-bs-target="#supprimer{{ $employe->id }}"
                                >Supprimer</a
                            >
                            </div>
                        </div>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- end campaign activities   -->
        <!-- ============================================================== -->
      </div>
      <div class="d-flex justify-content-center">
        {{ $employes->links() }}
      </div>
    </div>

    <!-- Modal supprimer -->
    @include('dashboards.layouts.pages.section.modals.employes.supprimer-employe')
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    @include('dashboards.layouts.footer')
  </div>
