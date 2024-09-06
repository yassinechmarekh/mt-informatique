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
                            <a href="{{ route('admin.dashboard.produits.ajouter-produit') }}">Ajouter Produit</a>
                        @elseif($user->role === 'Employe')
                            <a href="{{ route('employe.dashboard.produits.ajouter-produit') }}">Ajouter Produit</a>
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
          <form class="needs-validation" enctype="multipart/form-data" action="{{ route('dashboard.produits.modifier-produit.put') }}" method="POST">
            @csrf
            <input type="hidden" id="idproduit" name="idproduit" value="{{ $produit->id }}">
            @method('PUT')
            <!-- ============================================================== -->
            <!-- Informations generales -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="card">
                <h5 class="card-header">Informations Générales</h5>
                <div class="card-body">
                  <div class="row">
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    >
                      <label for="titre">Titre</label>
                      <input
                        type="text"
                        class="form-control"
                        id="titre"
                        name="titre"
                        placeholder="Titre du produit"
                        value="{{ $produit->titre }}"
                        required
                      />
                      <div class="valid-feedback">Bien!</div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div
                      class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                      style="margin-top: 10px"
                    >
                      <label for="ImagePrincipale"
                        >Image Principale</label
                      >
                      <!-- .card -->
                        <div class="card card-figure">
                            <!-- .card-figure -->
                            <figure class="figure">
                                <!-- .figure-img -->
                                <div class="figure-img">
                                    <img class="img-fluid" src="{{ asset('assets/store/images/product/' . $produit->ImagePrincipale) }}" alt="Card image cap">
                                    <div class="figure-description">
                                        <h6 class="figure-title">Veuillez selectinner l'image que vous souhaitez remplacer</h6>
                                    </div>
                                    <div class="figure-action">
                                        <input
                                            type="file"
                                            class="form-control"
                                            id="ImagePrincipale"
                                            name="ImagePrincipale"
                                        />
                                    </div>
                                </div>
                                <!-- /.figure-img -->
                            </figure>
                            <!-- /.card-figure -->
                        </div>
                        <!-- /.card -->
                      <div class="invalid-feedback">Bien!</div>
                    </div>
                    <div
                      class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                      style="margin-top: 10px"
                    >
                      <label for="ImageDashboard"
                        >Image Dashboard</label
                      >
                      <!-- .card -->
                      <div class="card card-figure">
                            <!-- .card-figure -->
                            <figure class="figure">
                                <!-- .figure-img -->
                                <div class="figure-img">
                                    <img class="img-fluid" src="{{ asset('assets/dashboard/images/' . $produit->ImageDashboard) }}" alt="Card image cap">
                                    <div class="figure-description">
                                        <h6 class="figure-title">Veuillez selectinner l'image que vous souhaitez remplacer</h6>
                                    </div>
                                    <div class="figure-action">
                                        <input
                                            type="file"
                                            class="form-control"
                                            id="ImageDashboard"
                                            name="ImageDashboard"
                                        />
                                    </div>
                                </div>
                                <!-- /.figure-img -->
                            </figure>
                            <!-- /.card-figure -->
                        </div>
                        <!-- /.card -->
                      <div class="invalid-feedback">Bien!</div>
                    </div>
                    <div
                      class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                      style="margin-top: 10px"
                    >
                      <label for="AncienPrix">Ancien Prix</label>
                      <input
                        type="number"
                        class="form-control"
                        id="AncienPrix"
                        name="AncienPrix"
                        placeholder="Ancien Prix du produit"
                        value="{{ intval(preg_replace('/[^0-9,]/', '', $produit->AncienPrix)) }}"
                        required
                      />
                      <div class="invalid-feedback">Bien!</div>
                    </div>
                    <div
                      class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                      style="margin-top: 10px"
                    >
                      <label for="NouveauPrix">Nouveau Prix</label>
                      <input
                        type="number"
                        class="form-control"
                        id="NouveauPrix"
                        name="NouveauPrix"
                        placeholder="Nouveau Prix du produit"
                        value="{{ intval(preg_replace('/[^0-9,]/', '', $produit->NouveauPrix)) }}"
                        required
                      />
                      <div class="invalid-feedback">Bien!</div>
                    </div>
                    <div
                      class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                      style="margin-top: 10px"
                    >
                      <div class="form-group">
                        <label for="categorie">Catégories</label>
                        <select class="form-control" id="categorie" name="categorie">
                          <option>Choisir la catégorie</option>
                          @foreach ($categories as $categorie)
                                <option value="{{ $categorie->NomCategorie }}" {{ $categorie->id === $produit->IdCategorie ? 'selected' : '' }}>
                                    {{ $categorie->NomCategorie }}
                                </option>
                          @endforeach
                        </select>
                      </div>
                      <div class="invalid-feedback">Bien!</div>
                    </div>
                    <div
                      class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                      style="margin-top: 10px"
                    >
                      <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                          <option value="">Choisir la status du produit</option>
                          <option value="Affaire du jour" {{ $produit->status === "Affaire du jour" ? 'selected' : '' }}>Affaire du jour</option>
                          <option value="Nouveau Arrivage" {{ $produit->status === "Nouveau Arrivage" ? 'selected' : '' }}>Nouveau</option>
                          <option value="Meilleures Ventes" {{ $produit->status === "Meilleures Ventes" ? 'selected' : '' }}>Populaire</option>
                          <option value="Articles Soldés" {{ $produit->status === "Articles Soldés" ? 'selected' : '' }}>Solde</option>
                          <option value="autre">Sans status</option>
                        </select>
                      </div>
                      <div class="invalid-feedback">Bien!</div>
                    </div>
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                      style="margin-top: 10px"
                    >
                      <label for="Description">Déscription</label>
                      <div
                        class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                      >
                        <textarea
                          class="form-control"
                          id="Description"
                          name="Description"
                          cols="120"
                          rows="5"
                          placeholder="Déscription du produit"
                          required
                        >{{ $produit->DescriptionModal }}</textarea>
                      </div>
                      <div class="valid-feedback">Bien!</div>
                    </div>
                    <div class="row" style="width: 100%">
                        <div
                        class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2"
                        style="margin-top: 10px"
                        >
                            <label for="Tag1">Tag 1</label>
                            <input
                                type="text"
                                class="form-control"
                                id="Tag1"
                                name="Tag1"
                                placeholder="Tag 1"
                                value="{{ $tags->Tag1 }}"
                                required
                            />
                            <div class="invalid-feedback">Bien!</div>
                        </div>
                        <div
                        class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2"
                        style="margin-top: 10px"
                        >
                            <label for="Tag2">Tag 2</label>
                            <input
                                type="text"
                                class="form-control"
                                id="Tag2"
                                name="Tag2"
                                placeholder="Tag 2"
                                value="{{ $tags->Tag2 }}"
                                required
                            />
                            <div class="invalid-feedback">Bien!</div>
                        </div>
                        <div
                        class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2"
                        style="margin-top: 10px"
                        >
                            <label for="Tag3">Tag 3</label>
                            <input
                                type="text"
                                class="form-control"
                                id="Tag3"
                                name="Tag3"
                                placeholder="Tag 3"
                                value="{{ $tags->Tag3 }}"
                                required
                            />
                            <div class="invalid-feedback">Bien!</div>
                        </div>
                        <div
                        class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2"
                        style="margin-top: 10px"
                        >
                            <label for="Tag4">Tag 4</label>
                            <input
                                type="text"
                                class="form-control"
                                id="Tag4"
                                name="Tag4"
                                placeholder="Tag 4"
                                value="{{ $tags->Tag4 }}"
                                required
                            />
                            <div class="invalid-feedback">Bien!</div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- end Informations generales -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Details description -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="card">
                <h5 class="card-header">Détails du description</h5>
                <div class="card-body">
                  <div class="row">
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                      style="margin-top: 10px"
                    >
                      <label for="soustitre1">Sous Titre 1</label>
                      <input
                        type="text"
                        class="form-control"
                        id="soustitre1"
                        name="soustitre1"
                        placeholder="Sous Titre 1"
                        value="{{ $description->sousTitre1 }}"
                        required
                      />
                      <div class="valid-feedback">Bien!</div>
                    </div>
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    >
                      <label for="paragraphe1">Paragraphe 1</label>
                      <div
                        class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                      >
                        <textarea
                          class="form-control"
                          id="paragraphe1"
                          name="paragraphe1"
                          cols="120"
                          rows="5"
                          placeholder="1er paragraphe"
                          required
                        >{{ $description->paragraph1 }}</textarea>
                      </div>
                      <div class="valid-feedback">Bien!</div>
                    </div>
                  </div>
                  <div class="row">
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                      style="margin-top: 10px"
                    >
                      <label for="soustitre2">Sous Titre 2</label>
                      <input
                        type="text"
                        class="form-control"
                        id="soustitre2"
                        name="soustitre2"
                        placeholder="Sous Titre 2"
                        value="{{ $description->sousTitre2 }}"
                        required
                      />
                      <div class="valid-feedback">Bien!</div>
                    </div>
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    >
                      <label for="paragraphe2">Paragraphe 2</label>
                      <div
                        class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                      >
                        <textarea
                          class="form-control"
                          id="paragraphe2"
                          name="paragraphe2"
                          cols="120"
                          rows="5"
                          placeholder="2ème paragraphe"
                          required
                        >{{ $description->paragraph2 }}</textarea>
                      </div>
                      <div class="valid-feedback">Bien!</div>
                    </div>
                  </div>
                  <div class="row">
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                      style="margin-top: 10px"
                    >
                      <label for="soustitre3">Sous Titre 3</label>
                      <input
                        type="text"
                        class="form-control"
                        id="soustitre3"
                        name="soustitre3"
                        placeholder="Sous Titre 3"
                        value="{{ $description->sousTitre2 }}"
                        required
                      />
                      <div class="valid-feedback">Bien!</div>
                    </div>
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    >
                      <label for="paragraphe3">Paragraphe 3</label>
                      <div
                        class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                      >
                        <textarea
                          class="form-control"
                          id="paragraphe3"
                          name="paragraphe3"
                          cols="120"
                          rows="5"
                          placeholder="3ème paragraphe"
                          required
                        >{{ $description->paragraph3 }}</textarea>
                      </div>
                      <div class="valid-feedback">Bien!</div>
                    </div>
                  </div>
                  <div class="row">
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                      style="margin-top: 10px"
                    >
                      <label for="soustitre4">Sous Titre 4</label>
                      <input
                        type="text"
                        class="form-control"
                        id="soustitre4"
                        name="soustitre4"
                        placeholder="Sous Titre 4"
                        value="{{ $description->sousTitre4 }}"
                        required
                      />
                      <div class="valid-feedback">Bien!</div>
                    </div>
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    >
                      <label for="paragraphe4">Paragraphe 4</label>
                      <div
                        class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                      >
                        <textarea
                          class="form-control"
                          id="paragraphe4"
                          name="paragraphe4"
                          cols="120"
                          rows="5"
                          placeholder="4ème paragraphe"
                          required
                        >{{ $description->paragraph4 }}</textarea>
                      </div>
                      <div class="valid-feedback">Bien!</div>
                    </div>
                  </div>
                  <div class="row">
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                      style="margin-top: 10px"
                    >
                      <label for="soustitre5">Sous Titre 5</label>
                      <input
                        type="text"
                        class="form-control"
                        id="soustitre5"
                        name="soustitre5"
                        placeholder="Sous Titre 5"
                        value="{{ $description->sousTitre5 }}"
                        required
                      />
                      <div class="valid-feedback">Bien!</div>
                    </div>
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    >
                      <label for="paragraphe5">Paragraphe 5</label>
                      <div
                        class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                      >
                        <textarea
                          class="form-control"
                          id="paragraphe5"
                          name="paragraphe5"
                          cols="120"
                          rows="5"
                          placeholder="5ème paragraphe"
                          required
                        >{{ $description->paragraph5 }}</textarea>
                      </div>
                      <div class="valid-feedback">Bien!</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- end Details description -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Images -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="card">
                <h5 class="card-header">Images</h5>
                <div class="card-body">
                  <h6>Image 1</h6>
                  <div class="form-row">
                    <div
                      class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                      style="margin-top: 10px"
                    >
                      <label for="smallImage1">Small</label>
                      <!-- .card -->
                      <div class="card card-figure">
                            <!-- .card-figure -->
                            <figure class="figure">
                                <!-- .figure-img -->
                                <div class="figure-img">
                                    <img class="img-fluid" src="{{ asset('assets/store/images/product-details/small/' . $images->smallImage1) }}" alt="Card image cap">
                                    <div class="figure-description">
                                        <h6 class="figure-title">Veuillez selectinner l'image que vous souhaitez remplacer</h6>
                                    </div>
                                    <div class="figure-action">
                                        <input
                                            type="file"
                                            class="form-control"
                                            id="smallImage1"
                                            name="smallImage1"
                                            placeholder=""
                                        />
                                    </div>
                                </div>
                                <!-- /.figure-img -->
                            </figure>
                            <!-- /.card-figure -->
                        </div>
                        <!-- /.card -->
                      <div class="invalid-feedback">Bien!</div>
                    </div>
                    <div
                      class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                      style="margin-top: 10px"
                    >
                      <label for="zoomImage1">Zoom</label>
                        <!-- .card -->
                        <div class="card card-figure">
                        <!-- .card-figure -->
                        <figure class="figure">
                            <!-- .figure-img -->
                            <div class="figure-img">
                                <img class="img-fluid" src="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage1) }}" alt="Card image cap">
                                <div class="figure-description">
                                    <h6 class="figure-title">Veuillez selectinner l'image que vous souhaitez remplacer</h6>
                                </div>
                                <div class="figure-action">
                                    <input
                                        type="file"
                                        class="form-control"
                                        id="zoomImage1"
                                        name="zoomImage1"
                                        placeholder=""
                                    />
                                </div>
                            </div>
                            <!-- /.figure-img -->
                        </figure>
                        <!-- /.card-figure -->
                        </div>
                        <!-- /.card -->
                      <div class="invalid-feedback">Bien!</div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                    <h6>Image 2</h6>
                    <div class="form-row">
                      <div
                        class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                        style="margin-top: 10px"
                      >
                        <label for="smallImage2">Small</label>
                        <!-- .card -->
                        <div class="card card-figure">
                            <!-- .card-figure -->
                            <figure class="figure">
                                <!-- .figure-img -->
                                <div class="figure-img">
                                    <img class="img-fluid" src="{{ asset('assets/store/images/product-details/small/' . $images->smallImage2) }}" alt="Card image cap">
                                    <div class="figure-description">
                                        <h6 class="figure-title">Veuillez selectinner l'image que vous souhaitez remplacer</h6>
                                    </div>
                                    <div class="figure-action">
                                        <input
                                            type="file"
                                            class="form-control"
                                            id="smallImage2"
                                            name="smallImage2"
                                            placeholder=""
                                        />
                                    </div>
                                </div>
                                <!-- /.figure-img -->
                            </figure>
                            <!-- /.card-figure -->
                        </div>
                        <!-- /.card -->
                        <div class="invalid-feedback">Bien!</div>
                      </div>
                      <div
                        class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                        style="margin-top: 10px"
                      >
                        <label for="zoomImage2">Zoom</label>
                        <!-- .card -->
                        <div class="card card-figure">
                            <!-- .card-figure -->
                            <figure class="figure">
                                <!-- .figure-img -->
                                <div class="figure-img">
                                    <img class="img-fluid" src="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage2) }}" alt="Card image cap">
                                    <div class="figure-description">
                                        <h6 class="figure-title">Veuillez selectinner l'image que vous souhaitez remplacer</h6>
                                    </div>
                                    <div class="figure-action">
                                        <input
                                        type="file"
                                        class="form-control"
                                        id="zoomImage2"
                                        name="zoomImage2"
                                        placeholder=""
                                        />
                                    </div>
                                </div>
                                <!-- /.figure-img -->
                            </figure>
                            <!-- /.card-figure -->
                        </div>
                        <!-- /.card -->
                        <div class="invalid-feedback">Bien!</div>
                      </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6>Image 3</h6>
                    <div class="form-row">
                      <div
                        class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                        style="margin-top: 10px"
                      >
                        <label for="smallImage3">Small</label>
                        <!-- .card -->
                        <div class="card card-figure">
                            <!-- .card-figure -->
                            <figure class="figure">
                                <!-- .figure-img -->
                                <div class="figure-img">
                                    <img class="img-fluid" src="{{ asset('assets/store/images/product-details/small/' . $images->smallImage3) }}" alt="Card image cap">
                                    <div class="figure-description">
                                        <h6 class="figure-title">Veuillez selectinner l'image que vous souhaitez remplacer</h6>
                                    </div>
                                    <div class="figure-action">
                                        <input
                                            type="file"
                                            class="form-control"
                                            id="smallImage3"
                                            name="smallImage3"
                                            placeholder=""
                                        />
                                    </div>
                                </div>
                                <!-- /.figure-img -->
                            </figure>
                            <!-- /.card-figure -->
                        </div>
                        <!-- /.card -->
                        <div class="invalid-feedback">Bien!</div>
                      </div>
                      <div
                        class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                        style="margin-top: 10px"
                      >
                        <label for="zoomImage3">Zoom</label>
                        <!-- .card -->
                        <div class="card card-figure">
                            <!-- .card-figure -->
                            <figure class="figure">
                                <!-- .figure-img -->
                                <div class="figure-img">
                                    <img class="img-fluid" src="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage3) }}" alt="Card image cap">
                                    <div class="figure-description">
                                        <h6 class="figure-title">Veuillez selectinner l'image que vous souhaitez remplacer</h6>
                                    </div>
                                    <div class="figure-action">
                                        <input
                                        type="file"
                                        class="form-control"
                                        id="zoomImage3"
                                        name="zoomImage3"
                                        placeholder=""
                                        />
                                    </div>
                                </div>
                                <!-- /.figure-img -->
                            </figure>
                            <!-- /.card-figure -->
                        </div>
                        <!-- /.card -->
                        <div class="invalid-feedback">Bien!</div>
                      </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6>Image 4</h6>
                    <div class="form-row">
                      <div
                        class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                        style="margin-top: 10px"
                      >
                        <label for="smallImage4">Small</label>
                        <!-- .card -->
                        <div class="card card-figure">
                            <!-- .card-figure -->
                            <figure class="figure">
                                <!-- .figure-img -->
                                <div class="figure-img">
                                    <img class="img-fluid" src="{{ asset('assets/store/images/product-details/small/' . $images->smallImage4) }}" alt="Card image cap">
                                    <div class="figure-description">
                                        <h6 class="figure-title">Veuillez selectinner l'image que vous souhaitez remplacer</h6>
                                    </div>
                                    <div class="figure-action">
                                        <input
                                        type="file"
                                        class="form-control"
                                        id="smallImage4"
                                        name="smallImage4"
                                        placeholder=""
                                        />
                                    </div>
                                </div>
                                <!-- /.figure-img -->
                            </figure>
                            <!-- /.card-figure -->
                        </div>
                        <!-- /.card -->
                        <div class="invalid-feedback">Bien!</div>
                      </div>
                      <div
                        class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                        style="margin-top: 10px"
                      >
                        <label for="zoomImage4">Zoom</label>
                        <!-- .card -->
                        <div class="card card-figure">
                            <!-- .card-figure -->
                            <figure class="figure">
                                <!-- .figure-img -->
                                <div class="figure-img">
                                    <img class="img-fluid" src="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage4) }}" alt="Card image cap">
                                    <div class="figure-description">
                                        <h6 class="figure-title">Veuillez selectinner l'image que vous souhaitez remplacer</h6>
                                    </div>
                                    <div class="figure-action">
                                        <input
                                        type="file"
                                        class="form-control"
                                        id="zoomImage4"
                                        name="zoomImage4"
                                        placeholder=""
                                        />
                                    </div>
                                </div>
                                <!-- /.figure-img -->
                            </figure>
                            <!-- /.card-figure -->
                        </div>
                        <!-- /.card -->
                        <div class="invalid-feedback">Bien!</div>
                      </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6>Image 5</h6>
                    <div class="form-row">
                      <div
                        class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                        style="margin-top: 10px"
                      >
                        <label for="smallImage5">Small</label>
                        <!-- .card -->
                        <div class="card card-figure">
                            <!-- .card-figure -->
                            <figure class="figure">
                                <!-- .figure-img -->
                                <div class="figure-img">
                                    <img class="img-fluid" src="{{ asset('assets/store/images/product-details/small/' . $images->smallImage5) }}" alt="Card image cap">
                                    <div class="figure-description">
                                        <h6 class="figure-title">Veuillez selectinner l'image que vous souhaitez remplacer</h6>
                                    </div>
                                    <div class="figure-action">
                                        <input
                                        type="file"
                                        class="form-control"
                                        id="smallImage5"
                                        name="smallImage5"
                                        placeholder=""
                                        />
                                    </div>
                                </div>
                                <!-- /.figure-img -->
                            </figure>
                            <!-- /.card-figure -->
                        </div>
                        <!-- /.card -->
                        <div class="invalid-feedback">Bien!</div>
                      </div>
                      <div
                        class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                        style="margin-top: 10px"
                      >
                        <label for="zoomImage5">Zoom</label>
                        <!-- .card -->
                        <div class="card card-figure">
                            <!-- .card-figure -->
                            <figure class="figure">
                                <!-- .figure-img -->
                                <div class="figure-img">
                                    <img class="img-fluid" src="{{ asset('assets/store/images/product-details/zoom/' . $images->zoomImage5) }}" alt="Card image cap">
                                    <div class="figure-description">
                                        <h6 class="figure-title">Veuillez selectinner l'image que vous souhaitez remplacer</h6>
                                    </div>
                                    <div class="figure-action">
                                        <input
                                        type="file"
                                        class="form-control"
                                        id="zoomImage5"
                                        name="zoomImage5"
                                        placeholder=""
                                        />
                                    </div>
                                </div>
                                <!-- /.figure-img -->
                            </figure>
                            <!-- /.card-figure -->
                        </div>
                        <!-- /.card -->
                        <div class="invalid-feedback">Bien!</div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- end Images -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Button form -->
            <!-- ============================================================== -->
            <div class="col-sm-12 pl-0">
              <p class="text-right">
                <button type="reset" class="btn btn-space btn-secondary">Annuler</button>
                <button type="submit" class="btn btn-space btn-primary">
                  Confirmer
                </button>
              </p>
            </div>
            <!-- ============================================================== -->
            <!-- end Button form -->
            <!-- ============================================================== -->
          </form>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
      @include('dashboards.layouts.footer')
      <!-- ============================================================== -->
      <!-- end footer -->
      <!-- ============================================================== -->
    </div>
  </div>
