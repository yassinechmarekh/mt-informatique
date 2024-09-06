@extends('layouts.master')


@section('content')
<div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
    <div class="container">
      <div class="breadcrumb-content text-center">
        <h2 data-aos="fade-up" data-aos-delay="200">Mon Panier</h2>
        <ul data-aos="fade-up" data-aos-delay="400">
          <li><a href="{{ route('acceuil') }}">Acceuil</a></li>
          <li><i class="ti-angle-right"></i></li>
          <li>Mon Panier</li>
        </ul>
      </div>
    </div>
    <div class="breadcrumb-img-1" data-aos="fade-right" data-aos-delay="200">
      <img src="{{ asset('assets/store/images/banner/breadcrumb-1.png') }}" alt="" />
    </div>
    <div class="breadcrumb-img-2" data-aos="fade-left" data-aos-delay="200">
      <img src="{{ asset('assets/store/images/banner/breadcrumb-2.png') }}" alt="" />
    </div>
  </div>
  <div class="cart-area pt-100 pb-100">
    <div class="container" data-aos="fade-up" data-aos-delay="200">
      <div class="row">
        <div class="col-12">
          <form action="#">
            <div class="cart-table-content">
              <div class="table-content table-responsive">
                <table>
                  <thead>
                    <tr>
                      <th class="width-thumbnail"></th>
                      <th class="width-name">Produit</th>
                      <th class="width-price">Prix</th>
                      <th class="width-quantity">Quantité</th>
                      <th class="width-subtotal">Total</th>
                      <th class="width-remove"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(session('panier'))
                        @php
                            $panier = session('panier');
                        @endphp
                        @foreach ($panier as $p)
                            @php
                                $prixTotal =0;
                            @endphp
                            <tr>
                                <td class="product-thumbnail">
                                <a href="product-details.html"
                                    ><img src="{{ asset('assets/store/images/product/'.$p['image']) }}" alt=""
                                /></a>
                                </td>
                                <td class="product-name">
                                <h5>
                                    <a href="{{ route('produit-details', $p['slug']) }}"
                                    >{{ $p['titre'] }}</a
                                    >
                                </h5>
                                </td>
                                <td class="product-cart-price">
                                <span class="amount">{{ $p['prix'] }}</span>
                                </td>
                                <td class="cart-quality">
                                <div class="product-quality">
                                    <input
                                    class="cart-plus-minus-box input-text qty text"
                                    name="qtybutton"
                                    value="{{ $p['quantite'] }}"
                                    />
                                </div>
                                </td>
                                @php
                                    // Chaîne de caractères représentant le montant
                                    $montant = $p['prix'];

                                    // Supprimer les caractères non numériques (y compris les espaces insécables et la virgule)
                                    $condition = str_replace([' ', ' ', ','], ['', '', '.'], $montant);

                                    // Convertir la chaîne en float
                                    $montantFloat = (float) $condition;

                                    $prixTotal += intval($p['quantite']) * $montantFloat;
                                @endphp
                                <td class="product-total"><span>{{ $prixTotal }} DH</span></td>
                                <td class="product-remove">
                                <a href="{{ route('supprimer.panier',$p['idproduit']) }}"><i class="ti-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="cart-shiping-update-wrapper">
                  <div class="cart-shiping-update btn-hover">
                    <a href="{{ route('boutique') }}">Continuer Vos Achats</a>
                  </div>
                  <div class="cart-clear-wrap">
                    <div class="cart-clear btn-hover">
                      <button>Mise à jour panier</button>
                    </div>
                    <div class="cart-clear btn-hover">
                      <a href="{{ route('vider.panier') }}">Vider le panier</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
          <div class="cart-calculate-discount-wrap mb-40">
            <h4>Informations de Livraison</h4>
            <div class="calculate-discount-content">
              <div class="input-style">
                <input type="text" placeholder="Ville" />
              </div>
              <div class="input-style">
                <input type="text" placeholder="Code ZIP" />
              </div>
              <div class="calculate-discount-btn btn-hover">
                <a class="btn theme-color" href="#">Mise à jour</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="cart-calculate-discount-wrap mb-40">
            <h4>Coupon de Réduction</h4>
            <div class="calculate-discount-content">
              <p>Entrez votre code promo si vous en avez un.</p>
              <div class="input-style">
                <input type="text" placeholder="Coupon code" />
              </div>
              <div class="calculate-discount-btn btn-hover">
                <a class="btn theme-color" href="#">Appliquer Coupon</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-12">
          <div class="grand-total-wrap">
            <div class="grand-total-content">
                @php
                    $panier = session('panier');
                    $total = 0;
                    if($panier){
                        foreach($panier as $p){

                            // Supprimer les caractères non numériques (y compris les espaces insécables et la virgule)
                            $prix = str_replace([' ', ' ', ','], ['', '', '.'], $p['prix']);

                            // Convertir la chaîne en float
                            $prixFloat = (float) $prix;

                            $total += intval($p['quantite']) * $prixFloat;
                        }
                    }
                @endphp
              <h3>Total <span>{{ $total }},00 DH</span></h3>
              <div class="grand-shipping">
                <span>Expédition</span>
                <ul>
                  <li>
                    <input
                      type="radio"
                      name="shipping"
                      value="info"
                      checked="checked"
                    /><label>Livraison gratuite</label>
                  </li>
                </ul>
              </div>
              <div class="grand-total">
                <h4>Total <span>{{ $total }},00 DH</span></h4>
              </div>
            </div>
            <div class="grand-total-btn btn-hover">
              <a class="btn theme-color" href="{{ route('checkout') }}"
                >Passer à la caisse</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
