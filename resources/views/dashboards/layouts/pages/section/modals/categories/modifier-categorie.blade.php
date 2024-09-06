@foreach ($categories as $categorie)
<div
      class="modal fade"
      id="modifier{{ $categorie->id }}"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
    <form action="{{ route('categories.update') }}" method="POST">
        @csrf
        @method('PUT')
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              Modifier la Catégorie
            </h1>
          </div>
          <div class="modal-body">
              <div>
                <input type="hidden" id="idCategorie" name="idCategorie" value="{{ $categorie->id }}">
              </div>
              <div class="mb-3">
                <label for="nomCategorie" class="col-form-label"
                  >Nom Catégorie:</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="nomCategorie"
                  name="nomCategorie"
                  value="{{ $categorie->NomCategorie }}"
                />
              </div>
              <div class="form-row">
                <div
                  class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2"
                  style="margin-top: 10px"
                >
                  <label for="tag1">Tag 1</label>
                 @foreach ($tags as $tag)
                    @if ($categorie->IdTags === $tag->id)
                        <input
                        type="text"
                        class="form-control"
                        id="tag1"
                        name="tag1"
                        value="{{ $tag->Tag1 }}"
                        required
                        />
                    @endif
                 @endforeach
                  <div class="invalid-feedback">Bien!</div>
                </div>
                <div
                  class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2"
                  style="margin-top: 10px"
                >
                  <label for="tag2">Tag 2</label>
                  @foreach ($tags as $tag)
                    @if ($categorie->IdTags === $tag->id)
                        <input
                        type="text"
                        class="form-control"
                        id="tag2"
                        name="tag2"
                        value="{{ $tag->Tag2 }}"
                        required
                        />
                    @endif
                  @endforeach
                  <div class="invalid-feedback">Bien!</div>
                </div>
                <div
                  class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2"
                  style="margin-top: 10px"
                >
                  <label for="tag3">Tag 3</label>
                  @foreach ($tags as $tag)
                    @if ($categorie->IdTags === $tag->id)
                        <input
                            type="text"
                            class="form-control"
                            id="tag3"
                            name="tag3"
                            value="{{ $tag->Tag3 }}"
                            required
                        />
                    @endif
                  @endforeach
                  <div class="invalid-feedback">Bien!</div>
                </div>
              </div>
              <div class="form-row">
                <div
                  class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2"
                  style="margin-top: 10px"
                >
                  <label for="tag4">Tag 4</label>
                  @foreach ($tags as $tag)
                    @if ($categorie->IdTags === $tag->id)
                        <input
                            type="text"
                            class="form-control"
                            id="tag4"
                            name="tag4"
                            value="{{ $tag->Tag4 }}"
                            required
                        />
                    @endif
                  @endforeach
                  <div class="invalid-feedback">Bien!</div>
                </div>
                <div
                  class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2"
                  style="margin-top: 10px"
                >
                  <label for="tag5">Tag 5</label>
                  @foreach ($tags as $tag)
                    @if ($categorie->IdTags === $tag->id)
                        <input
                          type="text"
                          class="form-control"
                          id="tag5"
                          name="tag5"
                          value="{{ $tag->Tag5 }}"
                          required
                        />
                    @endif
                  @endforeach
                  <div class="invalid-feedback">Bien!</div>
                </div>
                <div
                  class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2"
                  style="margin-top: 10px"
                >
                  <label for="tag6">Tag 6</label>
                  @foreach ($tags as $tag)
                    @if ($categorie->IdTags === $tag->id)
                        <input
                          type="text"
                          class="form-control"
                          id="tag6"
                          name="tag6"
                          value="{{ $tag->Tag6 }}"
                          required
                        />
                    @endif
                  @endforeach
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
            <button type="submit" class="btn btn-primary">Confirmer</button>
          </div>
        </div>
      </div>
    </form>
    </div>
@endforeach
