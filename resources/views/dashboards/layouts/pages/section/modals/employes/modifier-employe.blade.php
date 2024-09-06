@foreach ($employes as $employe)
    <div
        class="modal fade"
        id="modifier{{ $employe->id }}"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="{{ route('admin.dashboard.employes.modifier') }}" method="POST">
                @csrf
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    Modifier Employée
                </h1>
                </div>
                <input type="hidden" id="idUser" name="idUser" value="{{ $employe->id }}">
                @method('PUT')
                <div class="modal-body">
                    <div class="form-row">
                    <div
                        class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                        style="margin-top: 10px"
                    >
                        <label for="NomEmploye">Nom</label>
                        <input
                        type="text"
                        class="form-control"
                        id="NomEmploye"
                        name="NomEmploye"
                        placeholder="Nom d'employe"
                        value="{{ $employe->NomEmploye }}"
                        required
                        />
                        <div class="invalid-feedback">Bien!</div>
                    </div>
                    <div
                        class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                        style="margin-top: 10px"
                    >
                        <label for="PrenomEmploye">Prénom</label>
                        <input
                        type="text"
                        class="form-control"
                        id="PrenomEmploye"
                        name="PrenomEmploye"
                        placeholder="Prenom d'employe"
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
                        <label for="GenreEmploye">Genre</label><br />
                        <label
                        class="custom-control custom-radio custom-control-inline"
                        >
                        <input
                            type="radio"
                            name="GenreEmploye"
                            {{ $employe->GenreEmploye === 'Male' ? 'checked' : '' }}
                            value="Male"
                            class="custom-control-input"
                        /><span class="custom-control-label">Male</span>
                        </label>
                        <label
                        class="custom-control custom-radio custom-control-inline"
                        >
                        <input
                            type="radio"
                            name="GenreEmploye"
                            {{ $employe->GenreEmploye === 'Femme' ? 'checked' : '' }}
                            value="Femme"
                            class="custom-control-input"
                        /><span class="custom-control-label">Femme</span>
                        </label>
                    </div>
                    <div
                        class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                        style="margin-top: 10px"
                    >
                        <label for="SalaireEmploye">Salaire</label>
                        <input
                        type="text"
                        class="form-control"
                        id="SalaireEmploye"
                        name="SalaireEmploye"
                        placeholder="Salaire d'employe"
                        value="{{ $employe->SalaireEmploye }}"
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
                        <label for="RoleEmploye">Rôle</label>
                        <input
                        type="text"
                        class="form-control"
                        id="RoleEmploye"
                        name="RoleEmploye"
                        placeholder="Rôle d'employe"
                        value="{{ $employe->RoleEmploye }}"
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
                        <label for="EmailEmploye">Email</label>
                        <input
                        type="email"
                        class="form-control"
                        id="EmailEmploye"
                        name="EmailEmploye"
                        placeholder="Email d'employe"
                        value="{{ $users->where('id', $employe->IdUser)->first()->email }}"
                        required
                        />
                        <div class="invalid-feedback">Bien!</div>
                    </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                >
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
@endforeach
