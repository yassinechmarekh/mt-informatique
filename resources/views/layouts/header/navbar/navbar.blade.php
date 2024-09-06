<header class="header-area header-responsive-padding header-height-1">
    <div class="header-top d-none d-lg-block bg-gray">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-6">
            <div class="welcome-text">
              <p>Bienvenue chez MT Informatique!</p>
            </div>
          </div>
          <div class="col-lg-6 col-6">
            <div class="language-currency-wrap">
              <div class="currency-wrap border-style">
                <a class="currency-active" href="#"
                  >MAD (MAR) <i class="ti-angle-down"></i
                ></a>
                <div class="currency-dropdown">
                  <ul>
                    <li><a href="#">MAD (MAR) </a></li>
                    <li><a href="#">Dollar (USA) </a></li>
                    <li><a href="#">Euro (EUR) </a></li>
                  </ul>
                </div>
              </div>
              <div class="language-wrap">
                <a class="language-active" href="#"
                  ><img src="{{asset('assets/store/images/icon-img/france.png')}}" alt="" />
                  France <i class="ti-angle-down"></i
                ></a>
                <div class="language-dropdown">
                  <ul>
                    <li>
                      <a href="#"
                        ><img
                          src="{{asset('assets/store/images/icon-img/france.png')}}"
                          alt=""
                        />France</a
                      >
                    </li>
                    <li>
                      <a href="#"
                        ><img
                          src="{{asset('assets/store/images/icon-img/flag.png')}}"
                          alt=""
                        />English
                      </a>
                    </li>
                    <li>
                      <a href="#"
                        ><img
                          src="{{asset('assets/store/images/icon-img/maroc.png')}}"
                          alt=""
                        />Arabic
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-bottom sticky-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-3 col-md-6 col-6">
            <div class="logo">
              <a href="{{ route('acceuil') }}"
                ><img src="{{asset('assets/store/images/logo/logo.png')}}" alt="logo"
              /></a>
            </div>
          </div>
          <div
            class="col-lg-6 d-none d-lg-block d-flex justify-content-center"
          >
            <div class="main-menu text-center">
              <nav>
                @include('layouts.header.menu.menu')
              </nav>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-6">
            <div class="header-action-wrap">
              <div class="header-action-style header-search-1">
                <a class="search-toggle" href="#">
                  <i class="pe-7s-search s-open"></i>
                  <i class="pe-7s-close s-close"></i>
                </a>
                <div class="search-wrap-1">
                  <form action="{{ route('products.search') }}" method="GET">
                    <input name="query" placeholder="Rechercher des produits…" type="text" value="{{ isset($query) ? $query : '' }}"/>
                    <button class="button-search" type="submit">
                      <i class="pe-7s-search"></i>
                    </button>
                  </form>
                </div>
              </div>
              <div class="header-action-style">
                @auth
                    @if($user->role === 'Admin')
                        <a title="Login Register" href="{{ route('admin.dashboard') }}"
                            ><i class="pe-7s-user"></i
                        ></a>
                    @elseif($user->role === 'Employe')
                        <a title="Login Register" href="{{ route('employe.dashboard') }}"
                            ><i class="pe-7s-user"></i
                        ></a>
                    @else
                        <a title="Login Register" href="{{ route('client.dashboard') }}"
                            ><i class="pe-7s-user"></i
                        ></a>
                    @endif
                @else
                    <a title="Login Register" href="{{ route('login') }}"
                        ><i class="pe-7s-user"></i
                    ></a>
                @endauth
              </div>
              <div class="header-action-style">
                <a title="Wishlist" href="{{ route('liste-d-envies') }}"
                  ><i class="pe-7s-like"></i
                ></a>
              </div>
              <div class="header-action-style header-action-cart">
                <a class="cart-active" href="#"
                  ><i class="pe-7s-shopbag"></i>
                  <span class="product-count bg-black">
                    @if(session('panier'))
                        {{ count(session('panier')) }}
                    @else
                    00
                    @endif
                  </span>
                </a>
              </div>
              <div class="header-action-style d-block d-lg-none">
                <a class="mobile-menu-active-button" href="#"
                  ><i class="pe-7s-menu"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
