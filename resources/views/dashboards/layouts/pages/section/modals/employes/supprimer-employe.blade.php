@foreach ($employes as $employe)
    <div
      class="modal fade"
      id="supprimer{{ $employe->id }}"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              Suppresion Employée
            </h1>
          </div>
          <div class="modal-body">
            <p>Vous voulez vraiment supprimer cet employé ?</p>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-light"
              data-bs-dismiss="modal"
            >
              Annuler
            </button>
            <form action="{{ route('admin.dashboard.employes.supprimer') }}" method="POST">
                @csrf
                <input type="hidden" id="idUser" name="idUser" value="{{ $employe->id }}">
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endforeach
