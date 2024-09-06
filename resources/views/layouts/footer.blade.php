<footer class="footer-area">
    <div class="bg-gray-2">
      <div class="container">
        <div class="footer-top pt-80 pb-35">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="footer-widget footer-about mb-40">
                <div class="footer-logo">
                  <a href="{{ route('acceuil') }}"
                    ><img src="{{ asset('assets/store/images/logo/logo$.png') }}" alt="logo"
                  /></a>
                </div>
                <p>
                  MT Informatique est une boutique spécialisée dans la fourniture d'équipements informatiques,
                  électroniques et télécoms.
                </p>

              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div
                class="footer-widget footer-widget-margin-1 footer-list mb-40"
              >
                <h3 class="footer-title">Liens Rapide</h3>
                <ul>
                  <li><a href="{{ route('acceuil') }}">Acceuil</a></li>
                  <li><a href="{{ route('boutique') }}">Boutique</a></li>
                  <li><a href="{{ route('nos-services') }}">Services</a></li>
                  <li><a href="{{ route('apropos') }}">A propos</a></li>
                  <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-12">
              <div class="footer-widget footer-list mb-40">
                <h3 class="footer-title">Mon Compte</h3>
                <ul>
                  <li>
                    @auth
                        @if($user->role === 'Admin')
                            <a href="{{ route('admin.dashboard') }}">Mon Compte</a>
                        @elseif($user->role === 'Employe')
                            <a href="{{ route('employe.dashboard') }}">Mon Compte</a>
                        @else
                            <a href="{{ route('client.dashboard') }}">Mon Compte</a>
                        @endif
                    @else
                        <a href="{{ route('login') }}">Mon Compte</a>
                    @endauth
                  </li>
                  <li>
                    @auth
                        @if($user->role === 'Admin')
                            <a href="{{ route('admin.dashboard') }}">Historique</a>
                        @elseif($user->role === 'Employe')
                            <a href="{{ route('employe.dashboard') }}">Historique</a>
                        @else
                            <a href="{{ route('client.dashboard') }}">Historique</a>
                        @endif
                    @else
                        <a href="{{ route('login') }}">Historique</a>
                    @endauth
                  </li>
                  <li><a href="wishlist.html">Liste d'envies</a></li>
                  <li><a href="{{ route('blog') }}">Blogs</a></li>
                  <li>
                    @auth
                        @if($user->role === 'Admin')
                            <a href="{{ route('admin.dashboard') }}">Historique</a>
                        @elseif($user->role === 'Employe')
                            <a href="{{ route('employe.dashboard') }}">Historique</a>
                        @else
                            <a href="{{ route('client.dashboard') }}">Historique</a>
                        @endif
                    @else
                        <a href="{{ route('login') }}">Historique</a>
                    @endauth
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div
                class="footer-widget footer-widget-margin-2 footer-address mb-40"
              >
                <h3 class="footer-title">Entrer en contact</h3>
                <ul>
                  <li><span>Adresse: </span>4ème Etage N°16، Imm 82 Rue Soumaya, Casablanca 20300</li>
                  <li><span>Téléphone:</span> 06-63-44-02-17</li>
                  <li><span>Email: </span>contact@mtinformatique.ma </li>
                </ul>
                <div class="open-time">
                  <p>
                    Ouvert : <span>8:00 AM</span> - Fermeture :
                    <span>18:00 PM</span>
                  </p>
                  <p>Samedi - Dimanche : Fermé</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-gray-3">
      <div class="container">
        <div class="footer-bottom copyright text-center bg-gray-3">
          <p>
            Copyright ©2024 All rights reserved | Made by
            <a href="https://dev-yassine-chmarekh-portfolio.pantheonsite.io/"> Yassine_ChM</a>.
          </p>
        </div>
      </div>
    </div>
  </footer>
