@extends('layouts.master')
@section('content')
<div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
    <div class="container">
      <div class="breadcrumb-content text-center">
        <h2>Mon Compte</h2>
        <ul>
          <li><a href="{{ route('acceuil') }}">Acceuil</a></li>
          <li><i class="ti-angle-right"></i></li>
          <li>Mon Compte</li>
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
  <!-- my account wrapper start -->
  <div class="my-account-wrapper pb-100 pt-100" data-aos="fade-up" data-aos-delay="200">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- My Account Page Start -->
          <div class="myaccount-page-wrapper">
            <!-- My Account Tab Menu Start -->
            <div class="row">
              <div class="col-lg-3 col-md-4">
                <div class="myaccount-tab-menu nav" role="tablist">
                  <a href="#dashboad" class="active" data-bs-toggle="tab"
                    >Dashboard</a
                  >
                  <a href="#orders" data-bs-toggle="tab">Commandes</a>
                  <a href="#payment-method" data-bs-toggle="tab"
                    >Mode de paiement</a
                  >
                  <a href="#address-edit" data-bs-toggle="tab">Addresse</a>
                  <a href="#account-info" data-bs-toggle="tab"
                    >Informations Personnelles</a
                  >
                  <a href="#pass-info" data-bs-toggle="tab"
                    >Détails du Compte</a
                  >
                  <div>
                    <a
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                    >Se déconnecter</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                  </div>
                </div>
              </div>
              <!-- My Account Tab Menu End -->
              <!-- My Account Tab Content Start -->
              <div class="col-lg-9 col-md-8">
                <div class="tab-content" id="myaccountContent">
                  <!-- Single Tab Content Start -->
                  <div
                    class="tab-pane fade show active"
                    id="dashboad"
                    role="tabpanel"
                  >
                    <div class="myaccount-content">
                      <h3>Dashboard</h3>
                      <div class="welcome">
                        <p>Bonjour,
                            @if ($client->PrenomClient !== null)
                                <strong>{{ $client->PrenomClient }}</strong>
                            @endif
                        </p>
                      </div>

                      <p class="mb-0">
                        Depuis le tableau de bord de votre compte. vous
                        pouvez facilement vérifier et visualiser vos
                        commandes récentes, gérer vos adresses de livraison
                        et de facturation et modifier votre mot de passe et
                        les détails de votre compte.
                      </p>
                      @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                      @endif
                    </div>
                  </div>
                  <!-- Single Tab Content End -->
                  <!-- Single Tab Content Start -->
                  <div class="tab-pane fade" id="orders" role="tabpanel">
                    <div class="myaccount-content">
                      <h3>Commandes</h3>
                      <div
                        class="myaccount-table table-responsive text-center"
                      >
                        <table class="table table-bordered">
                          <thead class="thead-light">
                            <tr>
                              <th>Commandes</th>
                              <th>Produit</th>
                              <th>Status</th>
                              <th>Total</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php
                                $id=count($commandes);
                            @endphp
                            @foreach ($commandes as $commande)
                                <tr>
                                    <td>{{ $id-- }}</td>
                                    <td>{{ Str::limit($commande->ProduitTitre,50) }}</td>
                                    <td>{{ $commande->status }}</</td>
                                    <td>{{ $commande->Prix }}</</td>
                                    <td>
                                    <a
                                        href="{{ route('panier-details') }}"
                                        class="check-btn sqr-btn"
                                        >Voir</a
                                    >
                                    </td>
                                </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-- Single Tab Content End -->
                  <!-- Single Tab Content Start -->
                  <div
                    class="tab-pane fade"
                    id="payment-method"
                    role="tabpanel"
                  >
                    <div class="myaccount-content">
                      <h3>Mode de paiement</h3>
                      <p>
                        Paiement à la livraison.
                      </p>
                    </div>
                  </div>
                  <!-- Single Tab Content End -->
                  <!-- Single Tab Content Start -->
                  <div
                    class="tab-pane fade"
                    id="address-edit"
                    role="tabpanel"
                  >
                    <div class="myaccount-content">
                      <h3>Adresse</h3>
                      <address>
                        @if ($client->PrenomClient === null && $client->VilleClient === null && $client->AdresseClient === null)
                            <p>
                                Veuillez Compléter vos informations !!
                            </p>
                        @else
                            <p><strong>{{ $client->PrenomClient }}</strong></p>
                            <p>
                            Maroc, {{ $client->VilleClient }} <br />
                            {{ $client->AdresseClient }}
                            </p>
                            <p>Tél: {{ $client->TelClient }}</p>
                        @endif
                      </address>
                      <a href="#account-info" class="check-btn sqr-btn"
                        ><i class="fa fa-edit"></i> Modifier l'adresse</a
                      >
                    </div>
                  </div>
                  <!-- Single Tab Content End -->
                  <!-- Single Tab Content Start -->
                  <div
                    class="tab-pane fade"
                    id="account-info"
                    role="tabpanel"
                  >
                    <div class="myaccount-content">
                      <h3>Informations Personnelles</h3>
                      <div class="account-details-form">
                        <form action="{{ route('client.dashboard.modifier-infos') }}" method="POST">
                            @csrf
                            <input type="hidden" id="idUser" name="idUser" value="{{ $user->id }}">
                            @method('PUT')
                            @if(session('changeInfo'))
                                <div class="alert alert-success" role="alert" style="width: 100%">
                                    {{ session('changeInfo') }}
                                </div>
                            @elseif ($errors->any())
                                <div class="alert alert-danger" role="alert" style="width: 100%">
                                    <ul>
                                        @foreach ($erros->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="single-input-item">
                                <label for="PrenomClient" class="required"
                                  >Prénom</label
                                >
                                <input type="text" id="PrenomClient" name="PrenomClient" value="{{ $client->PrenomClient }}"/>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="single-input-item">
                                <label for="NomClient" class="required"
                                  >Nom</label
                                >
                                <input type="text" id="NomClient" name="NomClient" value="{{ $client->NomClient }}"/>
                              </div>
                            </div>
                          </div>
                          <div class="single-input-item">
                            <label for="VilleClient" class="required"
                              >Ville</label
                            >
                            <select name="VilleClient" id="VilleClient" class="form-select">
                                @if ($client->VilleClient !== null)
                                    <option value="{{ $client->VilleClient }}" selected>{{ $client->VilleClient }}</option>
                                @else
                                    <option value="" selected>Choisir une ville</option>
                                    <option value="Afourar">Afourar</option>
                                    <option value="Agadir">Agadir</option>
                                    <option value="Aghbala">Aghbala</option>
                                    <option value="Aghbalou">Aghbalou</option>
                                    <option value="Agdz">Agdz</option>
                                    <option value="Agouraï">Agouraï</option>
                                    <option value="Aguelmous">Aguelmous</option>
                                    <option value="Ahfir">Ahfir</option>
                                    <option value="Aïn Leuh">Aïn Leuh</option>
                                    <option value="Aïn Bni Mathar">Aïn Bni Mathar</option>
                                    <option value="Ain Cheggag">Ain Cheggag</option>
                                    <option value="Aïn Dorij">Aïn Dorij</option>
                                    <option value="Aïn El Aouda">Aïn El Aouda</option>
                                    <option value="Aïn Erreggada">Aïn Erreggada</option>
                                    <option value="Aïn Harrouda">Aïn Harrouda</option>
                                    <option value="Aïn Jemaa">Aïn Jemaa</option>
                                    <option value="Aïn Karma">Aïn Karma</option>
                                    <option value="Aïn Taoujdate">Aïn Taoujdate</option>
                                    <option value="Aït Iaaza">Aït Iaaza</option>
                                    <option value="Aït Baha">Aït Baha</option>
                                    <option value="Aït Boubidmane">Aït Boubidmane</option>
                                    <option value="Aït Daoud">Aït Daoud</option>
                                    <option value="Aït Ishaq">Aït Ishaq</option>
                                    <option value="Aït Melloul">Aït Melloul</option>
                                    <option value="Aït Ourir">Aït Ourir</option>
                                    <option value="Akka">Akka</option>
                                    <option value="Aklim">Aklim</option>
                                    <option value="Aknoul">Aknoul</option>
                                    <option value="Ajdir (province d'Al Hoceïma)">Ajdir (province d'Al Hoceïma)</option>
                                    <option value="Ajdir (province de Taza)">Ajdir (province de Taza)</option>
                                    <option value="Al Aaroui">Al Aaroui</option>
                                    <option value="Al Hoceïma">Al Hoceïma</option>
                                    <option value="Alnif">Alnif</option>
                                    <option value="Amalou Ighriben">Amalou Ighriben</option>
                                    <option value="Amizmiz">Amizmiz</option>
                                    <option value="Aoufous">Aoufous</option>
                                    <option value="Aoulouz">Aoulouz</option>
                                    <option value="Aourir">Aourir</option>
                                    <option value="Arbaoua">Arbaoua</option>
                                    <option value="Arfoud">Arfoud</option>
                                    <option value="Assa">Assa</option>
                                    <option value="Assahrij">Assahrij</option>
                                    <option value="Assilah">Assilah</option>
                                    <option value="Azemmour">Azemmour</option>
                                    <option value="Azilal">Azilal</option>
                                    <option value="Azrou">Azrou</option>
                                    <option value="Bab Berred">Bab Berred</option>
                                    <option value="Bab Taza">Bab Taza</option>
                                    <option value="Bejaad">Bejaad</option>
                                    <option value="Ben Ahmed">Ben Ahmed</option>
                                    <option value="Ben Guerir">Ben Guerir</option>
                                    <option value="Ben Taïeb">Ben Taïeb</option>
                                    <option value="Ben Yakhlef">Ben Yakhlef</option>
                                    <option value="Beni Mellal">Beni Mellal</option>
                                    <option value="Ben Slimane">Ben Slimane</option>
                                    <option value="Berkane">Berkane</option>
                                    <option value="Berrechid">Berrechid</option>
                                    <option value="Bhalil">Bhalil</option>
                                    <option value="Biougra">Biougra</option>
                                    <option value="Bni Ansar">Bni Ansar</option>
                                    <option value="Bni Bouayach">Bni Bouayach</option>
                                    <option value="Bni Chiker">Bni Chiker</option>
                                    <option value="Bni Drar">Bni Drar</option>
                                    <option value="Bni Hadifa">Bni Hadifa</option>
                                    <option value="Bni Tadjite">Bni Tadjite</option>
                                    <option value="Bouanane">Bouanane</option>
                                    <option value="Bouarfa">Bouarfa</option>
                                    <option value="Boudnib">Boudnib</option>
                                    <option value="Bouguedra">Bouguedra</option>
                                    <option value="Bouhdila">Bouhdila</option>
                                    <option value="Bouizakarne">Bouizakarne</option>
                                    <option value="Boujdour">Boujdour</option>
                                    <option value="Boujniba">Boujniba</option>
                                    <option value="Boulanouare">Boulanouare</option>
                                    <option value="Boulemane">Boulemane</option>
                                    <option value="Boumalne Dadès">Boumalne Dadès</option>
                                    <option value="Boumia">Boumia</option>
                                    <option value="Bouskoura">Bouskoura</option>
                                    <option value="Bouznika">Bouznika</option>
                                    <option value="Bouzthate">Bouzthate</option>
                                    <option value="Bradia">Bradia</option>
                                    <option value="Brikcha">Brikcha</option>
                                    <option value="Bzou">Bzou</option>
                                    <option value="Casablanca">Casablanca</option>
                                    <option value="Chefchaouen">Chefchaouen</option>
                                    <option value="Chichaoua">Chichaoua</option>
                                    <option value="Dakhla">Dakhla</option>
                                    <option value="Dar Bni Karrich">Dar Bni Karrich</option>
                                    <option value="Dar Chaoui">Dar Chaoui</option>
                                    <option value="Dar El Kebdani">Dar El Kebdani</option>
                                    <option value="Dar Gueddari">Dar Gueddari</option>
                                    <option value="Dar Ould Zidouh">Dar Ould Zidouh</option>
                                    <option value="Dcheïra El Jihadia">Dcheïra El Jihadia</option>
                                    <option value="Debdou">Debdou</option>
                                    <option value="Demnate">Demnate</option>
                                    <option value="Deroua">Deroua</option>
                                    <option value="Drargua">Drargua</option>
                                    <option value="Driouch">Driouch</option>
                                    <option value="Echemmaia">Echemmaia</option>
                                    <option value="El Aïoun Sidi Mellouk">El Aïoun Sidi Mellouk</option>
                                    <option value="El Borouj">El Borouj</option>
                                    <option value="El Gara">El Gara</option>
                                    <option value="El Hajeb">El Hajeb</option>
                                    <option value="El Hanchane">El Hanchane</option>
                                    <option value="El Jadida">El Jadida</option>
                                    <option value="El Kbab">El Kbab</option>
                                    <option value="El Kelaa des Sraghna">El Kelaa des Sraghna</option>
                                    <option value="El Ksiba">El Ksiba</option>
                                    <option value="El Mansouria">El Mansouria</option>
                                    <option value="El Marsa">El Marsa</option>
                                    <option value="El Menzel">El Menzel</option>
                                    <option value="El Ouatia">El Ouatia</option>
                                    <option value="Errachidia">Errachidia</option>
                                    <option value="Er-Rich">Er-Rich</option>
                                    <option value="Essaouira">Essaouira</option>
                                    <option value="Es-Semara">Es-Semara</option>
                                    <option value="Fam El Hisn">Fam El Hisn</option>
                                    <option value="Farkhana">Farkhana</option>
                                    <option value="Fès">Fès</option>
                                    <option value="Figuig">Figuig</option>
                                    <option value="Fnideq">Fnideq</option>
                                    <option value="Foum Jamaa">Foum Jamaa</option>
                                    <option value="Foum Zguid">Foum Zguid</option>
                                    <option value="Fquih Ben Salah">Fquih Ben Salah</option>
                                    <option value="Guercif">Guercif</option>
                                    <option value="Ghafsaï">Ghafsaï</option>
                                    <option value="Ghmate">Ghmate</option>
                                    <option value="Goulmima">Goulmima</option>
                                    <option value="Gourrama">Gourrama</option>
                                    <option value="Guelmim">Guelmim</option>
                                    <option value="Guigou">Guigou</option>
                                    <option value="Guisser">Guisser</option>
                                    <option value="Had Bouhssoussen">Had Bouhssoussen</option>
                                    <option value="Had Kourt">Had Kourt</option>
                                    <option value="Had Oued Ifrane">Had Oued Ifrane</option>
                                    <option value="Haj Kaddour">Haj Kaddour</option>
                                    <option value="Hattane">Hattane</option>
                                    <option value="Ifrane Atlas Saghir">Ifrane Atlas Saghir</option>
                                    <option value="Ifrane">Ifrane</option>
                                    <option value="Ighoud">Ighoud</option>
                                    <option value="Ihddaden">Ihddaden</option>
                                    <option value="Imintanoute">Imintanoute</option>
                                    <option value="Imouzzer Kandar">Imouzzer Kandar</option>
                                    <option value="Imouzzer Marmoucha">Imouzzer Marmoucha</option>
                                    <option value="Imzouren">Imzouren</option>
                                    <option value="Inezgane">Inezgane</option>
                                    <option value="Irherm">Irherm</option>
                                    <option value="Issaguen">Issaguen</option>
                                    <option value="Itzer">Itzer</option>
                                    <option value="Jaadar">Jaadar</option>
                                    <option value="Jamaat Shaim">Jamaat Shaim</option>
                                    <option value="Jebha">Jebha</option>
                                    <option value="Jerada">Jerada</option>
                                    <option value="Jorf">Jorf</option>
                                    <option value="Jorf El Melha">Jorf El Melha</option>
                                    <option value="Kalaat M'Gouna">Kalaat M'Gouna</option>
                                    <option value="Karia (province d'El Jadida)">Karia (province d'El Jadida)</option>
                                    <option value="Karia (province de Tétouan)">Karia (province de Tétouan)</option>
                                    <option value="Karia Ba Mohamed">Karia Ba Mohamed</option>
                                    <option value="Kariat Arekmane">Kariat Arekmane</option>
                                    <option value="Kasba Tadla">Kasba Tadla</option>
                                    <option value="Kassita">Kassita</option>
                                    <option value="Kattara">Kattara</option>
                                    <option value="Kehf Nsour">Kehf Nsour</option>
                                    <option value="Kerouna">Kerouna</option>
                                    <option value="Kerrouchen">Kerrouchen</option>
                                    <option value="Khémis Sahel">Khémis Sahel</option>
                                    <option value="Khémisset">Khémisset</option>
                                    <option value="Khénifra">Khénifra</option>
                                    <option value="Khénichet">Khénichet</option>
                                    <option value="Khouribga">Khouribga</option>
                                    <option value="Ksar El Kébir">Ksar El Kébir</option>
                                    <option value="Laâounate">Laâounate</option>
                                    <option value="Laakarta">Laakarta</option>
                                    <option value="Laattaouia">Laattaouia</option>
                                    <option value="Laayoune">Laayoune</option>
                                    <option value="Lagouira">Lagouira</option>
                                    <option value="Lakhsas">Lakhsas</option>
                                    <option value="Lahraouyine">Lahraouyine</option>
                                    <option value="Lalla Mimouna">Lalla Mimouna</option>
                                    <option value="Lalla Takarkoust">Lalla Takarkoust</option>
                                    <option value="Larache">Larache</option>
                                    <option value="Lakouablia">Lakouablia</option>
                                    <option value="Lbir Jdid">Lbir Jdid</option>
                                    <option value="Loualidia">Loualidia</option>
                                    <option value="Loulad">Loulad</option>
                                    <option value="Lqliaa">Lqliaa</option>
                                    <option value="Maaziz">Maaziz</option>
                                    <option value="Madagh">Madagh</option>
                                    <option value="Marrakech">Marrakech</option>
                                    <option value="Martil">Martil</option>
                                    <option value="Massa">Massa</option>
                                    <option value="Matmata">Matmata</option>
                                    <option value="M'Diq">M'Diq</option>
                                    <option value="Médiouna">Médiouna</option>
                                    <option value="Mechra Bel Ksiri">Mechra Bel Ksiri</option>
                                    <option value="Mehdya">Mehdya</option>
                                    <option value="Meknès">Meknès</option>
                                    <option value="M'Haya">M'Haya</option>
                                    <option value="Midar">Midar</option>
                                    <option value="Midelt">Midelt</option>
                                    <option value="Missour">Missour</option>
                                    <option value="Mohammédia">Mohammédia</option>
                                    <option value="Moqrisset">Moqrisset</option>
                                    <option value="Moulay Abdallah">Moulay Abdallah</option>
                                    <option value="Moulay Ali Chérif">Moulay Ali Chérif</option>
                                    <option value="Moulay Bouazza">Moulay Bouazza</option>
                                    <option value="Moulay Bousselham">Moulay Bousselham</option>
                                    <option value="Moulay Brahim">Moulay Brahim</option>
                                    <option value="Moulay Driss Zerhoun">Moulay Driss Zerhoun</option>
                                    <option value="M'Rirt">M'Rirt</option>
                                    <option value="Nador">Nador</option>
                                    <option value="Naïma">Naïma</option>
                                    <option value="Nouaceur">Nouaceur</option>
                                    <option value="Oualidia">Oualidia</option>
                                    <option value="Ouaouizeght">Ouaouizeght</option>
                                    <option value="Ouarzazate">Ouarzazate</option>
                                    <option value="Oued Amlil">Oued Amlil</option>
                                    <option value="Oued Heïmer">Oued Heïmer</option>
                                    <option value="Oued Laou">Oued Laou</option>
                                    <option value="Oued Zem">Oued Zem</option>
                                    <option value="Ouezzane">Ouezzane</option>
                                    <option value="Ouislane">Ouislane</option>
                                    <option value="Oujda">Oujda</option>
                                    <option value="Oulad Abbou">Oulad Abbou</option>
                                    <option value="Oulad Amrane">Oulad Amrane</option>
                                    <option value="Oulad Ayad">Oulad Ayad</option>
                                    <option value="Oulad Berhil">Oulad Berhil</option>
                                    <option value="Oulad Frej">Oulad Frej</option>
                                    <option value="Oulad Ghadbane">Oulad Ghadbane</option>
                                    <option value="Oulad H'Riz Sahel">Oulad H'Riz Sahel</option>
                                    <option value="Oulad M'Barek">Oulad M'Barek</option>
                                    <option value="Oulad Mrah">Oulad Mrah</option>
                                    <option value="Oulad Saïd">Oulad Saïd</option>
                                    <option value="Oulad Tayeb">Oulad Tayeb</option>
                                    <option value="Oulad Teïma">Oulad Teïma</option>
                                    <option value="Oulad Yaïch">Oulad Yaïch</option>
                                    <option value="Oulad Zbaïr">Oulad Zbaïr</option>
                                    <option value="Oulmès">Oulmès</option>
                                    <option value="Oum El Guerdane">Oum El Guerdane</option>
                                    <option value="Ounagha">Ounagha</option>
                                    <option value="Outat El Haj">Outat El Haj</option>
                                    <option value="Rabat">Rabat</option>
                                    <option value="Ras El Aïn">Ras El Aïn</option>
                                    <option value="Ras El Ma">Ras El Ma</option>
                                    <option value="Ribate El Kheïr">Ribate El Kheïr</option>
                                    <option value="Rommani">Rommani</option>
                                    <option value="Sabaa Aiyoun">Sabaa Aiyoun</option>
                                    <option value="Safi">Safi</option>
                                    <option value="Saïdia">Saïdia</option>
                                    <option value="Salé">Salé</option>
                                    <option value="Sebt El Guerdane">Sebt El Guerdane</option>
                                    <option value="Sebt El Maarif">Sebt El Maarif</option>
                                    <option value="Sebt Gzoula">Sebt Gzoula</option>
                                    <option value="Sebt Jahjouh">Sebt Jahjouh</option>
                                    <option value="Sefrou">Sefrou</option>
                                    <option value="Selouane">Selouane</option>
                                    <option value="Settat">Settat</option>
                                    <option value="Sid L'Mokhtar">Sid L'Mokhtar</option>
                                    <option value="Sid Zouin">Sid Zouin</option>
                                    <option value="Sidi Abdallah Ghiat">Sidi Abdallah Ghiat</option>
                                    <option value="Sidi Addi">Sidi Addi</option>
                                    <option value="Sidi Ahmed">Sidi Ahmed</option>
                                    <option value="Sidi Ali Ban Hamdouche">Sidi Ali Ban Hamdouche</option>
                                    <option value="Sidi Allal El Bahraoui">Sidi Allal El Bahraoui</option>
                                    <option value="Sidi Allal Tazi">Sidi Allal Tazi</option>
                                    <option value="Sidi Bennour">Sidi Bennour</option>
                                    <option value="Sidi Bou Othmane">Sidi Bou Othmane</option>
                                    <option value="Sidi Boubker">Sidi Boubker</option>
                                    <option value="Sidi Bouknadel">Sidi Bouknadel</option>
                                    <option value="Sidi Bouzid">Sidi Bouzid</option>
                                    <option value="Sidi Kacem">Sidi Kacem</option>
                                    <option value="Sidi Hajjaj Oulad Mrah">Sidi Hajjaj Oulad Mrah</option>
                                    <option value="Sidi Ifni">Sidi Ifni</option>
                                    <option value="Sidi Jaber">Sidi Jaber</option>
                                    <option value="Sidi Lyamani">Sidi Lyamani</option>
                                    <option value="Sidi Rahhal">Sidi Rahhal</option>
                                    <option value="Sidi Rahhal Chataï">Sidi Rahhal Chataï</option>
                                    <option value="Sidi Slimane">Sidi Slimane</option>
                                    <option value="Sidi Slimane Echcharraa">Sidi Slimane Echcharraa</option>
                                    <option value="Sidi Smaïl">Sidi Smaïl</option>
                                    <option value="Sidi Taïbi">Sidi Taïbi</option>
                                    <option value="Sidi Yahya El Gharb">Sidi Yahya El Gharb</option>
                                    <option value="Skhirate">Skhirate</option>
                                    <option value="Skhour Rehamna">Skhour Rehamna</option>
                                    <option value="Skoura">Skoura</option>
                                    <option value="Smimou">Smimou</option>
                                    <option value="Soualem">Soualem</option>
                                    <option value="Souk El Arbaâ">Souk El Arbaâ</option>
                                    <option value="Souk Sebt Oulad Nemma">Souk Sebt Oulad Nemma</option>
                                    <option value="Tabounte">Tabounte</option>
                                    <option value="Tafetachte">Tafetachte</option>
                                    <option value="Tafraout">Tafraout</option>
                                    <option value="Tafrisset">Tafrisset</option>
                                    <option value="Taghjijt">Taghjijt</option>
                                    <option value="Tahannaout">Tahannaout</option>
                                    <option value="Tahla">Tahla</option>
                                    <option value="Taïnaste">Taïnaste</option>
                                    <option value="Talmest">Talmest</option>
                                    <option value="Taliouine">Taliouine</option>
                                    <option value="Talsint">Talsint</option>
                                    <option value="Tamallalt">Tamallalt</option>
                                    <option value="Tamanar">Tamanar</option>
                                    <option value="Tamassint">Tamassint</option>
                                    <option value="Tamegroute">Tamegroute</option>
                                    <option value="Tameslouht">Tameslouht</option>
                                    <option value="Tanger">Tanger</option>
                                    <option value="Tan-Tan">Tan-Tan</option>
                                    <option value="Taounate">Taounate</option>
                                    <option value="Tarfaya">Tarfaya</option>
                                    <option value="Targuist">Targuist</option>
                                    <option value="Taourirt">Taourirt</option>
                                    <option value="Taroudant">Taroudant</option>
                                    <option value="Tata">Tata</option>
                                    <option value="Taza">Taza</option>
                                    <option value="Taznakht">Taznakht</option>
                                    <option value="Témara">Témara</option>
                                    <option value="Temsia">Temsia</option>
                                    <option value="Tendrara">Tendrara</option>
                                    <option value="Tétouan">Tétouan</option>
                                    <option value="Thar Es Souk">Thar Es Souk</option>
                                    <option value="Tidass">Tidass</option>
                                    <option value="Tiflet">Tiflet</option>
                                    <option value="Tighassaline">Tighassaline</option>
                                    <option value="Tighza">Tighza</option>
                                    <option value="Timahdite">Timahdite</option>
                                    <option value="Tinejdad">Tinejdad</option>
                                    <option value="Tinghir">Tinghir</option>
                                    <option value="Tissa">Tissa</option>
                                    <option value="Tit Mellil">Tit Mellil</option>
                                    <option value="Tizi N'Test">Tizi N'Test</option>
                                    <option value="Tizi Ouasli">Tizi Ouasli</option>
                                    <option value="Tiznit">Tiznit</option>
                                    <option value="Tiztoutine">Tiztoutine</option>
                                    <option value="Touima">Touima</option>
                                    <option value="Touissit">Touissit</option>
                                    <option value="Toulal">Toulal</option>
                                    <option value="Tounfite">Tounfite</option>
                                    <option value="Youssoufia">Youssoufia</option>
                                    <option value="Zag">Zag</option>
                                    <option value="Zagora">Zagora</option>
                                    <option value="Zaïda">Zaïda</option>
                                    <option value="Zaïo">Zaïo</option>
                                    <option value="Zaouïat Bougrine">Zaouïat Bougrine</option>
                                    <option value="Zaouïat Cheikh">Zaouïat Cheikh</option>
                                    <option value="Zeghanghane">Zeghanghane</option>
                                    <option value="Zemamra">Zemamra</option>
                                    <option value="Zirara">Zirara</option>
                                    <option value="Zoumi">Zoumi</option>
                                    <option value="Zrarda">Zrarda</option>
                                @endif
                            </select>
                          </div>
                          <div class="single-input-item">
                            <label for="AdresseClient" class="required"
                              >Adresse</label
                            >
                            <input type="text" id="AdresseClient" name="AdresseClient" value="{{ $client->AdresseClient }}"/>
                          </div>
                          <div class="single-input-item">
                            <label for="TelClient" class="required">Tél</label>
                            <input type="tel" id="TelClient" name="TelClient" value="{{ $client->TelClient }}"/>
                          </div>
                          <div class="single-input-item btn-hover">
                            <button type="submit" class="check-btn sqr-btn">
                              Sauvegarder
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- Single Tab Content End -->
                  <!-- Single Tab Content Start -->
                  <div
                    class="tab-pane fade"
                    id="pass-info"
                    role="tabpanel"
                  >
                    <div class="myaccount-content">
                      <h3>Détails du Compte</h3>
                      <div class="account-details-form">
                        <form action="{{ route('client.dashboard.modifier-pass') }}" method="POST">
                            @csrf
                            <input type="hidden" id="idUser" name="idUser" value="{{ $user->id }}">
                            @method('PUT')
                            @if(session('changePass'))
                                <div class="alert alert-success" role="alert" style="width: 100%">
                                    {{ session('changePass') }}
                                </div>
                            @elseif(session('passNotEq') && session('passIncorrect'))
                                <div class="alert alert-danger" role="alert" style="width: 100%">
                                    <ul>
                                        <li>{{ session('passNotEq') }}</li>
                                        <li>{{ session('passIncorrect') }}</li>
                                    </ul>
                                </div>
                            @elseif(session('passNotEq'))
                                <div class="alert alert-danger" role="alert" style="width: 100%">
                                    {{ session('passNotEq') }}
                                </div>
                            @elseif(session('passIncorrect'))
                                <div class="alert alert-danger" role="alert" style="width: 100%">
                                    {{ session('passIncorrect') }}
                                </div>
                            @elseif($errors->any())
                                <div class="alert alert-danger" role="alert" style="width: 100%">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="single-input-item">
                                <label for="emailClient" class="required"
                                  >Email</label
                                >
                                <input type="email" id="emailClient" name="emailClient" value="{{ $user->email }}"/>
                            </div>
                            <div class="single-input-item">
                                <label for="AncienPass" class="required"
                                  >Mot de passe actuel</label
                                >
                                <input type="password" id="AncienPass" name="AncienPass"/>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                  <div class="single-input-item">
                                    <label for="NouveauPass" class="required"
                                      >Nouveau Mot de passe</label
                                    >
                                    <input type="password" id="NouveauPass" name="NouveauPass"/>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="single-input-item">
                                    <label for="confirm_NouveauPass" class="required"
                                      >Confirmez le Mot de passe</label
                                    >
                                    <input type="password" id="confirm_NouveauPass" name="confirm_NouveauPass"/>
                                  </div>
                                </div>
                            </div>
                            <div class="single-input-item btn-hover">
                              <button type="submit" class="check-btn sqr-btn">
                                Sauvegarder
                              </button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- My Account Tab Content End -->
            </div>
          </div>
          <!-- My Account Page End -->
        </div>
      </div>
    </div>
  </div>
  <!-- my account wrapper end -->
@endsection
