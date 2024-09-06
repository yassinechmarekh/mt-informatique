@foreach ($blogs as $blog)
    <div
      class="modal fade"
      id="supprimer{{ $blog->id }}"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              Suppresion Blog
            </h1>
          </div>
          <div class="modal-body">
            <p>Vous voulez vraiment supprimer cet article ?</p>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-light"
              data-bs-dismiss="modal"
            >
              Annuler
            </button>
            <form action="{{ route('dashboard.blogs.ajouter-blog.delete') }}" method="POST">
                @csrf
                @method('DELETE')
                <div>
                    <input type="hidden" id="idblog" name="idblog" value="{{ $blog->id }}">
                </div>
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endforeach
