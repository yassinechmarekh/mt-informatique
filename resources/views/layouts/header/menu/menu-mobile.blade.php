<ul>
    <li>
      <a href="{{ route('acceuil') }}">Acceuil</a>
    </li>
    <li>
      <a href="{{ route('boutique') }}">Boutique</a>
      <ul>
        <li>
            <a class="dropdown-title" href="{{ route('categories.details','equipements-bureautiques') }}"
            >Équipements Bureautiques</a
          >
          <ul>
            <li><a class="categorie-link" href="{{ route('categories.details','equipements-bureautiques') }}">Ordinateurs Bureau</a></li>
            <li><a class="categorie-link" href="{{ route('categories.details','equipements-bureautiques') }}">Ordinateurs Portables</a></li>
            <li><a class="categorie-link" href="{{ route('categories.details','equipements-bureautiques') }}">Imprimantes</a></li>
            <li><a class="categorie-link" href="{{ route('categories.details','equipements-bureautiques') }}">Photocopieurs</a></li>
            <li><a class="categorie-link" href="{{ route('categories.details','equipements-bureautiques') }}">Moniteurs</a></li>
          </ul>
        </li>
        <li>
            <a class="dropdown-title" href="{{ route('categories.details','accessoires-composants') }}"
            >Accessoires & Composants</a
          >
          <ul>
            <li><a class="categorie-link" href="{{ route('categories.details','accessoires-composants') }}">Claviers et souris</a></li>
            <li>
              <a class="categorie-link" href="{{ route('categories.details','accessoires-composants') }}"
                >Haut-parleurs et casques audio</a
              >
            </li>
            <li><a class="categorie-link" href="{{ route('categories.details','accessoires-composants') }}">Webcam</a></li>
            <li><a class="categorie-link" href="{{ route('categories.details','accessoires-composants') }}">Sac à dos</a></li>
          </ul>
        </li>
        <li>
          <a class="dropdown-title" href="{{ route('categories.details','equipements-reseaux') }}"
          >Equipements Réseaux</a
          >
          <ul>
            <li><a class="categorie-link" href="{{ route('categories.details','equipements-reseaux') }}">Points d'accès Wi-Fi</a></li>
            <li><a class="categorie-link" href="{{ route('categories.details','equipements-reseaux') }}">Modems DSL</a></li>
            <li><a class="categorie-link" href="{{ route('categories.details','equipements-reseaux') }}">Cartes réseau</a></li>
            <li><a class="categorie-link" href="{{ route('categories.details','equipements-reseaux') }}">Routeurs sans fil</a></li>
            <li><a class="categorie-link" href="{{ route('categories.details','equipements-reseaux') }}">Routeurs Ethernet</a></li>
          </ul>
        </li>
        <li>
            <a class="dropdown-title" href="{{ route('categories.details','consommables-informatiques') }}"
            >Consommables Informatiques</a
          >
          <ul>
            <li><a class="categorie-link" href="{{ route('categories.details','consommables-informatiques') }}">Cartouches & Toners</a></li>
            <li><a class="categorie-link" href="{{ route('categories.details','consommables-informatiques') }}">Papier d'impression</a></li>
            <li><a class="categorie-link" href="{{ route('categories.details','consommables-informatiques') }}">CD & DVD</a></li>
            <li><a class="categorie-link" href="{{ route('categories.details','consommables-informatiques') }}">Câbles & Adaptateurs</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <a href="{{ route('nos-services') }}">Nos Services </a>
    </li>
    <li>
      <a href="{{ route('blog') }}">BLOG </a>
    </li>
    <li>
      <a href="{{ route('apropos') }}">A propos </a>
    </li>
    <li>
      <a href="{{ route('contact') }}">Contact</a>
    </li>
  </ul>
