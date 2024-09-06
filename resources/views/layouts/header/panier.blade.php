<div class="sidebar-cart-active">
    <div class="sidebar-cart-all">
      <a class="cart-close" href="#"><i class="pe-7s-close"></i></a>
      <div class="cart-content">
        <h3>Panier</h3>
        <ul>
            @php
                $prixTotal =0;
            @endphp
            @if(session('panier'))
                @php
                    $panier = session('panier');
                @endphp
                @foreach ($panier as $p)
                    <li>
                        <div class="cart-img">
                        <a href="{{ route('produit-details', $p['slug']) }}"
                            ><img src="{{asset('assets/store/images/product/'.$p['image'])}}" alt=""
                        /></a>
                        </div>
                        <div class="cart-title">
                        <h4><a href="{{ route('produit-details', $p['slug']) }}">{{ $p['titre'] }}</a></h4>
                        <span> {{ $p['quantite'] }} × {{ $p['prix'] }} </span>
                        </div>
                        <div class="cart-delete">
                        <a href="{{ route('supprimer.panier',$p['idproduit']) }}">×</a>
                        </div>
                    </li>
                @endforeach
                @php
                    $total = 0;
                    foreach ($panier as $p) {
                        $prix = str_replace([' ', ' ', ','], ['', '', '.'], $p['prix']);
                        $prixFloat = (float) $prix;
                        $prixTotal = intval($p['quantite']) * $prixFloat;
                        $total += $prixTotal;
                    }
                @endphp
            @else
            <h4>Panier vide</h4>
            @endif
        </ul>
        <div class="cart-total">
          <h4>Total: <span>@if (!session('panier')) 0 DH @else {{ $total }},00 DH  @endif</span></h4>
        </div>
        <div class="cart-btn btn-hover">
          <a class="theme-color" href="{{ route('panier-details') }}">Voir Panier</a>
        </div>
        <div class="checkout-btn btn-hover">
          <a class="theme-color" href="{{ route('checkout') }}">Checkout</a>
        </div>
      </div>
    </div>
  </div>
