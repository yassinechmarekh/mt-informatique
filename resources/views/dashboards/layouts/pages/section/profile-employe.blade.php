@extends('dashboards.dashboard-admin.layouts.master')

@section('employes')
active
@endsection

@section('content')
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
                    MT informatique
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
    </div>
    <div class="dashboard-influence">
      <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- influencer profile  -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card influencer-profile-data">
              <div class="card-body">
                <div class="row">
                  <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="text-center">
                      <img
                        src="{{ asset('assets/dashboard/images/avatar-1.jpg') }}"
                        alt="User Avatar"
                        class="rounded-circle user-avatar-xxl"
                      />
                    </div>
                  </div>
                  <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
                    <div class="user-avatar-info">
                      <div class="m-b-20">
                        <div class="user-avatar-name">
                          <h2 class="mb-1">{{ $employe->NomEmploye }} {{ $employe->PrenomEmploye }}</h2>
                        </div>
                        <div class="rating-star d-inline-block">
                          <p class="d-inline-block text-dark">
                            {{ $employe->RoleEmploye }}
                          </p>
                        </div>
                      </div>
                      <div class="user-avatar-address">
                        <p class="border-bottom pb-3">
                          <span class="d-xl-inline-block d-block mb-2"
                            ><i
                              class="fa fa-fw fa-envelope mr-2 text-primary"
                            ></i
                            >{{ $user_employe->email }}</span
                          >
                          <span
                            class="mb-2 ml-xl-4 d-xl-inline-block d-block"
                            >Genre: {{ $employe->GenreEmploye }}
                          </span>
                          <span
                            class="mb-2 d-xl-inline-block d-block ml-xl-4"
                            >Salaire: {{ $employe->SalaireEmploye }}
                          </span>
                        </p>
                        <div class="mt-3">
                          <a href="#" class="badge badge-light mr-1"
                            >Gestion des produits</a
                          >
                          <a href="#" class="badge badge-light mr-1"
                            >Gestion des commandes</a
                          >
                          <a href="#" class="badge badge-light mr-1"
                            >Gestion des catégories</a
                          >
                          <a href="#" class="badge badge-light"
                            >Gestion des blogs</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- end influencer profile  -->
      <!-- ============================================================== -->
    </div>

    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    @include('dashboards.layouts.footer')
  </div>
@endsection
