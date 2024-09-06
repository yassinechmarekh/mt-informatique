@extends('dashboards.dashboard-employe.layouts.master')

@section('profile')
active
@endsection

@section('content')
<div class="dashboard-wrapper">
    <div class="influence-profile">
      <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader  -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
              <h2 class="pageheader-title">Employe Dashboard</h2>
              <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="{{ route('employe.dashboard.profile') }}" class="breadcrumb-link"
                        >Profile</a
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
        <!-- ============================================================== -->
        <!-- content -->
        <!-- ============================================================== -->
        <div class="row">
          <!-- ============================================================== -->
          <!-- profile -->
          <!-- ============================================================== -->
          <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
            <!-- ============================================================== -->
            <!-- card profile -->
            <!-- ============================================================== -->
            <div class="card">
              <div class="card-body">
                <div class="user-avatar text-center d-block">
                  <img
                    src="{{ asset('assets/dashboard/images/avatar-1.jpg') }}"
                    alt="User Avatar"
                    class="rounded-circle user-avatar-xxl"
                  />
                </div>
                <div class="text-center">
                  <h2 class="font-24 mb-0">{{ $employe->PrenomEmploye }} {{ $employe->NomEmploye }}</h2>
                  <p>
                    {{ $employe->RoleEmploye }} <br />
                    @MT Informatique
                  </p>
                </div>
              </div>
              <div class="card-body border-top">
                <h3 class="font-16">Contact</h3>
                <div class="">
                  <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                      <i class="fas fa-fw fa-envelope mr-2"></i
                      >{{ $employe->EmailProfessionnelEmploye }}
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body border-top">
                <h3 class="font-16">Fonctionalité</h3>
                <div>
                  <a href="#" class="badge badge-light mr-1"
                    >Gestion des commandes</a
                  ><a
                    href="#"
                    class="badge badge-light mr-1"
                    style="margin-top: 10px"
                    >Gestion des produits</a
                  ><a
                    href="#"
                    class="badge badge-light mr-1"
                    style="margin-top: 10px"
                    >Gestion des catégories</a
                  >
                  <a
                    href="#"
                    class="badge badge-light mr-1"
                    style="margin-top: 10px"
                    >Gestion des blogs</a
                  >
                </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- end card profile -->
            <!-- ============================================================== -->
          </div>
          <!-- ============================================================== -->
          <!-- end profile -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- campaign data -->
          <!-- ============================================================== -->
          <div class="col-xl-9 col-lg-9 col-md-7 col-sm-12 col-12">
            <!-- ============================================================== -->
            <!-- campaign tab one -->
            <!-- ============================================================== -->
            <div class="influence-profile-content pills-regular">
              <ul
                class="nav nav-pills mb-3 nav-justified"
                id="pills-tab"
                role="tablist"
              >
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    id="pills-campaign-tab"
                    data-toggle="pill"
                    href="#pills-campaign"
                    role="tab"
                    aria-controls="pills-campaign"
                    aria-selected="true"
                    >Informations d'entreprise</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    id="pills-packages-tab"
                    data-toggle="pill"
                    href="#pills-packages"
                    role="tab"
                    aria-controls="pills-packages"
                    aria-selected="false"
                    >Informations Personnelles</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    id="pills-review-tab"
                    data-toggle="pill"
                    href="#pills-review"
                    role="tab"
                    aria-controls="pills-review"
                    aria-selected="false"
                    >Changer le Mot de passe</a
                  >
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div
                  class="tab-pane fade show active"
                  id="pills-campaign"
                  role="tabpanel"
                  aria-labelledby="pills-campaign-tab"
                >
                  <div class="section-block">
                    <h3 class="section-title">Informations d'entreprise</h3>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div
                          class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                        >
                          <div
                            class="media influencer-profile-data d-flex align-items-center p-2"
                          >
                            <div class="mr-4">
                              <img
                                src="{{ asset('assets/dashboard/images/profile.png') }}"
                                alt="logo MT Informatique"
                                class="user-avatar-lg"
                              />
                            </div>
                            <div class="media-body">
                              <div class="influencer-profile-data">
                                <h3 class="m-b-10">MT Informatique</h3>
                                <p>
                                  <span class="m-r-20 d-inline-block"
                                    >Date de fondation
                                    <span class="m-l-10 text-primary"
                                      >24 Jan 2019</span
                                    >
                                  </span>
                                  <span class="m-r-20 d-inline-block">
                                    Directeur Générale
                                    <span class="m-l-10 text-secondary"
                                      >CHAMSI Mohamed</span
                                    >
                                  </span>
                                  <span class="m-r-20 d-inline-block">
                                    Forme Juridique
                                    <span class="m-l-10 text-primary"
                                      >Société à Responsabilité
                                      Limitée</span
                                    >
                                  </span>
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="border-top card-footer p-0">
                      <div class="campaign-metrics d-xl-inline-block">
                        <h4 class="mb-0">{{ $employes }}</h4>
                        <p>Employées</p>
                      </div>
                      <div class="campaign-metrics d-xl-inline-block">
                        <h4 class="mb-0">100.000 dhs</h4>
                        <p>Capitale</p>
                      </div>
                      <div class="campaign-metrics d-xl-inline-block">
                        <h4 class="mb-0">06</h4>
                        <p>Services</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="pills-packages"
                  role="tabpanel"
                  aria-labelledby="pills-packages-tab"
                >
                  <div class="row">
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    >
                      <div class="section-block">
                        <h2 class="section-title">
                          Modifier vos informations
                        </h2>
                      </div>
                    </div>
                    @if(session('changeInfo'))
                        <div class="alert alert-success" role="alert" style="width: 100%">
                            {{ session('changeInfo') }}
                        </div>
                    @elseif ($errors->any())
                        <div class="alert alert-danger" role="alert" style="width: 100%">
                            <ul>
                                @foreach ($erros->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    >
                      <form action="{{ route('employe.dashboard.profile.modifier') }}" method="POST">
                        @csrf
                        <div>
                            <input type="hidden" id="idUser" name="idUser" value="{{ $user->id }}">
                        </div>
                        @method('PUT')
                        <div class="form-row">
                          <div
                            class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                            style="margin-top: 10px"
                          >
                            <label for="NomEmployee">Nom</label>
                            <input
                              type="text"
                              class="form-control"
                              id="NomEmployee"
                              name="NomEmployee"
                              placeholder="Nom"
                              value="{{ $employe->NomEmploye }}"
                              required
                            />
                            <div class="invalid-feedback">Bien!</div>
                          </div>
                          <div
                            class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                            style="margin-top: 10px"
                          >
                            <label for="PrenomEmployee">Prénom</label>
                            <input
                              type="text"
                              class="form-control"
                              id="PrenomEmployee"
                              name="PrenomEmployee"
                              placeholder="Prenom"
                              value="{{ $employe->PrenomEmploye }}"
                              required
                            />
                            <div class="invalid-feedback">Bien!</div>
                          </div>
                        </div>
                        <div class="form-row">
                          <div
                            class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                            style="margin-top: 10px"
                          >
                            <label for="GenreEmployee">Genre</label><br />
                            <label
                              class="custom-control custom-radio custom-control-inline"
                            >
                              <input
                                type="radio"
                                name="GenreEmployee"
                                {{ $employe->GenreEmploye === 'Male' ? 'checked' : '' }}
                                value="Male"
                                class="custom-control-input"
                              /><span class="custom-control-label"
                                >Male</span
                              >
                            </label>
                            <label
                              class="custom-control custom-radio custom-control-inline"
                            >
                              <input
                                type="radio"
                                name="GenreEmployee"
                                {{ $employe->GenreEmploye === 'Femme' ? 'checked' : '' }}
                                value="Femme"
                                class="custom-control-input"
                              /><span class="custom-control-label"
                                >Femme</span
                              >
                            </label>
                          </div>
                          <div
                            class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                            style="margin-top: 10px"
                          >
                            <label for="SalaireEmployee">Salaire</label>
                            <input
                              type="text"
                              class="form-control"
                              id="SalaireEmployee"
                              name="SalaireEmployee"
                              value="{{ $employe->SalaireEmploye }}"
                              readonly
                            />
                            <div class="invalid-feedback">Bien!</div>
                          </div>
                        </div>
                        <div class="form-row">
                          <div
                            class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2"
                            style="margin-top: 10px"
                          >
                            <label for="RoleEmployee">Rôle</label>
                            <input
                              type="text"
                              class="form-control"
                              id="RoleEmployee"
                              name="RoleEmployee"
                              placeholder="Rôle"
                              value="{{ $employe->RoleEmploye }}"
                              readonly
                            />
                            <div class="invalid-feedback">Bien!</div>
                          </div>
                        </div>
                        <div class="form-row">
                          <div
                            class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2"
                            style="margin-top: 10px"
                          >
                            <label for="EmailProfesionnelEmploye"
                              >Email Profesionnel</label
                            >
                            <input
                              type="email"
                              class="form-control"
                              id="EmailProfesionnelEmploye"
                              name="EmailProfesionnelEmploye"
                              placeholder="Email Profesionnel"
                              value="{{ $employe->EmailProfessionnelEmploye }}"
                              required
                            />
                            <div class="invalid-feedback">Bien!</div>
                          </div>
                        </div>
                        <div class="text-right mt-3">
                          <button type="button" class="btn btn-secondary">
                            Annuler
                          </button>
                          <button type="submit" class="btn btn-primary">
                            Confirmer
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="pills-review"
                  role="tabpanel"
                  aria-labelledby="pills-review-tab"
                >
                  <div class="row">
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    >
                      <div class="section-block">
                        <h2 class="section-title">
                          Changer le Mot de passe
                        </h2>
                      </div>
                    </div>
                    @if(session('changePass'))
                        <div class="alert alert-success" role="alert" style="width: 100%">
                            {{ session('changePass') }}
                        </div>
                    @elseif ($errors->any())
                        <div class="alert alert-danger" role="alert" style="width: 100%">
                            <ul>
                                @foreach ($erros->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    >
                      <form action="{{ route('employe.dashboard.profile.modifier.password') }}" method="POST">
                        @csrf
                        <div>
                            <input type="hidden" id="idUser" name="idUser" value="{{ $user->id }}">
                        </div>
                        @method('PUT')
                        <div class="form-row">
                          <div
                            class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2"
                            style="margin-top: 10px"
                          >
                            <label for="EmailEmployee">Email</label>
                            <input
                              type="email"
                              class="form-control"
                              id="EmailEmployee"
                              name="EmailEmployee"
                              placeholder="Email"
                              value="{{ $user->email }}"
                              required
                            />
                            <div class="invalid-feedback">Bien!</div>
                          </div>
                        </div>
                        <div class="form-row">
                          <div
                            class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2"
                            style="margin-top: 10px"
                          >
                            <label for="AncienPass"
                              >Ancien Mot de passe</label
                            >
                            <input
                              type="password"
                              class="form-control"
                              id="AncienPass"
                              name="AncienPass"
                              placeholder="Ancien Mot de passe "
                              required
                            />
                            <div class="invalid-feedback">Bien!</div>
                          </div>
                        </div>
                        <div class="form-row">
                          <div
                            class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2"
                            style="margin-top: 10px"
                          >
                            <label for="NouveauPass"
                              >Nouveau Mot de passe</label
                            >
                            <input
                              type="password"
                              class="form-control"
                              id="NouveauPass"
                              name="NouveauPass"
                              placeholder="Nouveau Mot de passe "
                              required
                            />
                            <div class="invalid-feedback">Bien!</div>
                          </div>
                        </div>
                        <div class="text-right mt-3">
                          <button type="button" class="btn btn-secondary">
                            Annuler
                          </button>
                          <button type="submit" class="btn btn-primary">
                            Confirmer
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- end campaign tab one -->
            <!-- ============================================================== -->
          </div>
          <!-- ============================================================== -->
          <!-- end campaign data -->
          <!-- ============================================================== -->
        </div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- end content -->
    <!-- ============================================================== -->
    @include('dashboards.layouts.footer')
  </div>
@endsection
