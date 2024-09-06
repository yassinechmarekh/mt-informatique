@foreach ($categories as $categorie)
<div
      class="modal fade"
      id="supprimer{{ $categorie->id }}"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              Suppresion Catégorie
            </h1>
          </div>
          <div class="modal-body">
            <p>Vous voulez vraiment supprimer cette catégorie ?</p>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-light"
              data-bs-dismiss="modal"
            >
              Annuler
            </button>
            <form action="{{ route('categories.delete') }}" method="POST">
                @csrf
                <div>
                    <input type="hidden" id="idCategorie" name="idCategorie" value="{{ $categorie->id }}">
                </div>
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endforeach
