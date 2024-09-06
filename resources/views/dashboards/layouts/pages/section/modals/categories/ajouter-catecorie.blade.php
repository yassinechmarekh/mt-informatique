<div
        class="modal fade"
        id="ajouter"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
      <form action="{{ route('categories.ajout') }}" method="POST">
        @csrf
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">
                Nouveau Catégorie
              </h1>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                  <label for="nomCategorie" class="col-form-label"
                    >Nom Catégorie:</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    name="nomCategorie"
                    id="nomCategorie"
                    placeholder="Nom de la Catégorie"
                  />
                </div>
                <div class="form-row">
                    <div
                      class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2"
                      style="margin-top: 10px"
                    >
                      <label for="tag1">Tag 1</label>
                      <input
                        type="text"
                        class="form-control"
                        id="tag1"
                        name="tag1"
                        placeholder="Tag 1"
                        required
                      />
                      <div class="invalid-feedback">Bien!</div>
                    </div>
                    <div
                      class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2"
                      style="margin-top: 10px"
                    >
                      <label for="tag2">Tag 2</label>
                      <input
                        type="text"
                        class="form-control"
                        id="tag2"
                        name="tag2"
                        placeholder="Tag 2"
                        required
                      />
                      <div class="invalid-feedback">Bien!</div>
                    </div>
                    <div
                      class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2"
                      style="margin-top: 10px"
                    >
                      <label for="tag3">Tag 3</label>
                      <input
                        type="text"
                        class="form-control"
                        id="tag3"
                        name="tag3"
                        placeholder="Tag 3"
                        required
                      />
                      <div class="invalid-feedback">Bien!</div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div
                      class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2"
                      style="margin-top: 10px"
                    >
                      <label for="tag4">Tag 4</label>
                      <input
                        type="text"
                        class="form-control"
                        id="tag4"
                        name="tag4"
                        placeholder="Tag 4"
                        required
                      />
                      <div class="invalid-feedback">Bien!</div>
                    </div>
                    <div
                      class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2"
                      style="margin-top: 10px"
                    >
                      <label for="tag5">Tag 5</label>
                      <input
                        type="text"
                        class="form-control"
                        id="tag5"
                        name="tag5"
                        placeholder="Tag 5"
                        required
                      />
                      <div class="invalid-feedback">Bien!</div>
                    </div>
                    <div
                      class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2"
                      style="margin-top: 10px"
                    >
                      <label for="tag6">Tag 6</label>
                      <input
                        type="text"
                        class="form-control"
                        id="tag6"
                        name="tag6"
                        placeholder="Tag 6"
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
          </div>
        </div>
    </form>
    </div>
