@extends('layouts.master')


@section('content')
<div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
    <div class="container">
      <div class="breadcrumb-content text-center">
        <h2 data-aos="fade-up" data-aos-delay="200">Checkout</h2>
        <ul data-aos="fade-up" data-aos-delay="400">
          <li><a href="{{ route('acceuil') }}">Acceuil</a></li>
          <li><i class="ti-angle-right"></i></li>
          <li>Checkout</li>
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
<div class="checkout-main-area pb-100 pt-100">
  <div class="container">
    <div class="customer-zone mb-20" data-aos="fade-up" data-aos-delay="200">
      <p class="cart-page-title">
        Déjà client?
        <a class="checkout-click1" href="{{ route('logout') }}"
          >Cliquez ici pour vous identifier</a
        >
      </p>
      <div class="checkout-login-info">
        <p>
          Si vous avez déjà acheté chez nous, veuillez saisir vos
          coordonnées dans les cases ci-dessous. Si vous êtes un nouveau
          client, veuillez passer à la section Facturation et expédition.
        </p>
        <form action="{{ route('login') }}" method="POST">
            @csrf
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="sin-checkout-login">
                <label>Email <span>*</span></label>
                <input class="@error('email') is-invalid @enderror" type="text" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="sin-checkout-login">
                <label>Mots de passe <span>*</span></label>
                <input class="@error('password') is-invalid @enderror" type="password" name="password" placeholder="Mot de passe" required autocomplete="current-password" />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
          </div>
          <div class="button-remember-wrap">
            <button class="button" type="submit">Se connecter</button>
            <div class="checkout-login-toggle-btn">
              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
              <label for="remember">Sevenir de moi</label>
            </div>
          </div>
          <div class="lost-password">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Mot de passe perdu?</a>
            @endif
          </div>
        </form>
      </div>
    </div>
    <div class="customer-zone mb-20" data-aos="fade-up" data-aos-delay="200">
      <p class="cart-page-title">
        Avez-vous un coupon?
        <a class="checkout-click3" href="#"
          >Cliquez ici pour entrer votre code</a
        >
      </p>
      <div class="checkout-login-info3">
        <form action="#">
          <input type="text" placeholder="Code du Coupon" />
          <input type="submit" value="Appliquer Coupon" />
        </form>
      </div>
    </div>
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @elseif ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                 @foreach ($erros->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="checkout-wrap pt-30" data-aos="fade-up" data-aos-delay="200">
    <form action="{{ route('effectuer.commande') }}" method="POST">
        @csrf
      <div class="row">
        <div class="col-lg-7">
          <div class="billing-info-wrap">
            <h3>Détails de la facturation</h3>
            <input type="hidden" name="idclient" value="{{ $client->id }}"/>
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="billing-info mb-20">
                  <label
                    >Prénom
                    <abbr class="required" title="required"
                      >*</abbr
                    ></label
                  >
                  <input type="text" name="Prenom" value="{{ $client->PrenomClient }}"/>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="billing-info mb-20">
                  <label
                    >Nom
                    <abbr class="required" title="required"
                      >*</abbr
                    ></label
                  >
                  <input type="text" name="Nom" value="{{ $client->NomClient }}"/>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="billing-select select-style mb-20">
                  <label
                    >Ville
                    <abbr class="required" title="required"
                      >*</abbr
                    ></label
                  >
                  <select class="select-two-active" name="Ville" value="{{ $client->VilleClient }}">
                    <option value="Ad Dakhla">Ad Dakhla</option>
                    <option value="Ad Darwa">Ad Darwa</option>
                    <option value="Aïn Harrouda">Aïn Harrouda</option>
                    <option value="Aïn Taoujdat">Aïn Taoujdat</option>
                    <option value="Ait Melloul">Ait Melloul</option>
                    <option value="Ait Ourir">Ait Ourir</option>
                    <option value="Aït Melloul">Aït Melloul</option>
                    <option value="Agadir">Agadir</option>
                    <option value="Aguelmous">Aguelmous</option>
                    <option value="Al Aaroui">Al Aaroui</option>
                    <option value="Al Fqih Ben Çalah">
                      Al Fqih Ben Çalah
                    </option>
                    <option value="Al Hoceïma">Al Hoceïma</option>
                    <option value="Al Khmissat">Al Khmissat</option>
                    <option value="Al ’Attawia">Al ’Attawia</option>
                    <option value="Arfoud">Arfoud</option>
                    <option value="Azemmour">Azemmour</option>
                    <option value="Azrou">Azrou</option>
                    <option value="Aziylal">Aziylal</option>
                    <option value="Barrechid">Barrechid</option>
                    <option value="Ben Guerir">Ben Guerir</option>
                    <option value="Beni Mellal">Beni Mellal</option>
                    <option value="Beni Yakhlef">Beni Yakhlef</option>
                    <option value="Berkane">Berkane</option>
                    <option value="Biougra">Biougra</option>
                    <option value="Bir Jdid">Bir Jdid</option>
                    <option value="Bou Arfa">Bou Arfa</option>
                    <option value="Boujad">Boujad</option>
                    <option value="Bouknadel">Bouknadel</option>
                    <option value="Bouskoura">Bouskoura</option>
                    <option value="Casablanca" selected>
                      Casablanca
                    </option>
                    <option value="Chichaoua">Chichaoua</option>
                    <option value="Demnat">Demnat</option>
                    <option value="El Aïoun">El Aïoun</option>
                    <option value="El Hajeb">El Hajeb</option>
                    <option value="El Jadid">El Jadid</option>
                    <option value="El Kelaa des Srarhna">
                      El Kelaa des Srarhna
                    </option>
                    <option value="Errachidia">Errachidia</option>
                    <option value="Fnidq">Fnidq</option>
                    <option value="Fès">Fès</option>
                    <option value="Guelmim">Guelmim</option>
                    <option value="Guercif">Guercif</option>
                    <option value="Iheddadene">Iheddadene</option>
                    <option value="Imzouren">Imzouren</option>
                    <option value="Inezgane">Inezgane</option>
                    <option value="Jerada">Jerada</option>
                    <option value="Kenitra">Kenitra</option>
                    <option value="Khénifra">Khénifra</option>
                    <option value="Kouribga">Kouribga</option>
                    <option value="Ksar El Kebir">Ksar El Kebir</option>
                    <option value="Laâyoune">Laâyoune</option>
                    <option value="Larache">Larache</option>
                    <option value="Martil">Martil</option>
                    <option value="Marrakech">Marrakech</option>
                    <option value="Mechraa Bel Ksiri">
                      Mechraa Bel Ksiri
                    </option>
                    <option value="Meknès">Meknès</option>
                    <option value="Mehdya">Mehdya</option>
                    <option value="Midalt">Midalt</option>
                    <option value="Missour">Missour</option>
                    <option value="Mohammedia">Mohammedia</option>
                    <option value="Moulay Abdallah">
                      Moulay Abdallah
                    </option>
                    <option value="Moulay Bousselham">
                      Moulay Bousselham
                    </option>
                    <option value="Mrirt">Mrirt</option>
                    <option value="My Drarga">My Drarga</option>
                    <option value="Nador">Nador</option>
                    <option value="Oued Zem">Oued Zem</option>
                    <option value="Oujda-Angad">Oujda-Angad</option>
                    <option value="Oulad Barhil">Oulad Barhil</option>
                    <option value="Oulad Teïma">Oulad Teïma</option>
                    <option value="Oulad Tayeb">Oulad Tayeb</option>
                    <option value="Oulad Yaïch">Oulad Yaïch</option>
                    <option value="Qasbat Tadla">Qasbat Tadla</option>
                    <option value="Rabat">Rabat</option>
                    <option value="Sale">Sale</option>
                    <option value="Safi">Safi</option>
                    <option value="Sefrou">Sefrou</option>
                    <option value="Settat">Settat</option>
                    <option value="Sidi Qacem">Sidi Qacem</option>
                    <option value="Sidi Slimane">Sidi Slimane</option>
                    <option value="Sidi Smai'il">Sidi Smai'il</option>
                    <option value="Sidi Yahia El Gharb">
                      Sidi Yahia El Gharb
                    </option>
                    <option value="Sidi Yahya Zaer">
                      Sidi Yahya Zaer
                    </option>
                    <option value="Skhirate">Skhirate</option>
                    <option value="Souk et Tnine Jorf el Mellah">
                      Souk et Tnine Jorf el Mellah
                    </option>
                    <option value="Souq Sebt Oulad Nemma">
                      Souq Sebt Oulad Nemma
                    </option>
                    <option value="Tahla">Tahla</option>
                    <option value="Tameslouht">Tameslouht</option>
                    <option value="Taza">Taza</option>
                    <option value="Temara">Temara</option>
                    <option value="Tetouan">Tetouan</option>
                    <option value="Tifariti">Tifariti</option>
                    <option value="Tétouan">Tétouan</option>
                    <option value="Tiznit">Tiznit</option>
                    <option value="Tit Mellil">Tit Mellil</option>
                    <option value="Youssoufia">Youssoufia</option>
                    <option value="Zaïo">Zaïo</option>
                    <option value="Zagora">Zagora</option>
                    <option value="Zawyat ech Cheïkh">
                      Zawyat ech Cheïkh
                    </option>
                    <option value="Zeghanghane">Zeghanghane</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="billing-info mb-20">
                  <label
                    >Adresse
                    <abbr class="required" title="required"
                      >*</abbr
                    ></label
                  >
                  <input
                    class="billing-address"
                    placeholder="Votre adresse"
                    type="text"
                    name="Adresse"
                    value="{{ $client->AdresseClient }}"
                  />
                </div>
              </div>
              <div class="col-lg-12 col-md-12">
                <div class="billing-info mb-20">
                  <label
                    >Tél
                    <abbr class="required" title="required"
                      >*</abbr
                    ></label
                  >
                  <input type="text" name="Tel" value="{{ $client->TelClient }}"/>
                </div>
              </div>
              <div class="col-lg-12 col-md-12">
                <div class="billing-info mb-20">
                  <label
                    >Adresse e-mail
                    <abbr class="required" title="required"
                      >*</abbr
                    ></label
                  >
                  <input type="text" value="{{ $user->email }}"/>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="your-order-area">
            <h3>Votre commande</h3>
            <div class="your-order-wrap gray-bg-4">
              <div class="your-order-info-wrap">
                <div class="your-order-info">
                  <ul>
                    <li>Produit <span>Total</span></li>
                  </ul>
                </div>
                <div class="your-order-middle">
                  <ul>
                    @if(session('panier'))
                        @php
                            $total = 0;
                            $panier = session('panier');
                        @endphp
                        @foreach ($panier as $p)
                            @php
                                $prix = str_replace([' ', ' ', ','], ['', '', '.'], $p['prix']);
                                $prixFloat = (float) $prix;
                                $prixTotal = intval($p['quantite']) * $prixFloat;
                                $total += $prixTotal;
                            @endphp
                            <li>{{ Str::limit($p['titre'],30) }} X {{ $p['quantite'] }} <span>{{ $prixTotal }},00 DH </span></li>
                        @endforeach
                    @else
                    <li>Panier vide</li>
                    @endif
                  </ul>
                </div>
                <div class="your-order-info order-subtotal">
                  <ul>
                    <li>Total <span>@if (!session('panier')) 0 DH @else {{ $total }},00 DH  @endif</span></li>
                  </ul>
                </div>
                <div class="your-order-info order-shipping">
                  <ul>
                    <li>
                      Expédition
                      <p>Entrez votre adresse complète</p>
                    </li>
                  </ul>
                </div>
                <div class="your-order-info order-total">
                  <ul>
                    <li>Total <span>@if (!session('panier')) 0 DH 0 DH @else {{ $total }},00 DH  @endif</span></li>
                  </ul>
                </div>
              </div>
              <div class="payment-method">
                <div class="pay-top sin-payment">
                  <input
                    id="payment-method-3"
                    class="input-radio"
                    type="radio"
                    value="cheque"
                    name="payment_method"
                    checked="checked"
                  />
                  <label for="payment-method-3"
                    >Paiement à la livraison
                  </label>
                  <div class="payment-box payment_method_bacs">
                    <p>
                      Veuillez vérifier votre informations de livraison.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="Place-order btn-hover">
              <button type="submit">Passer la commande</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>
  </div>
</div>
@endsection
