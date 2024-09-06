@extends('layouts.master')

@section('content')
<div class="error">
    <div id="notfound">
      <div class="notfound">
        <!-- <div class="notfound-404">
          <h1>Oops!</h1>
        </div> -->
        <h2>404 - Page non trouvé</h2>
        <p>
            La page que vous recherchez a peut-être été supprimée, son nom a changé ou est temporairement indisponible.
        </p>
        <a href="{{ route('acceuil') }}">Aller à l'accueil</a>
      </div>
    </div>
  </div>
@endsection
