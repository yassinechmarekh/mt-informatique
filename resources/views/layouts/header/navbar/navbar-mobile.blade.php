<div class="off-canvas-active">
    <a class="off-canvas-close"><i class="ti-close"></i></a>
    <div class="off-canvas-wrap">
      <div class="welcome-text off-canvas-margin-padding">
        <p>Bienvenue chez MT Informatique!</p>
      </div>
      <div class="mobile-menu-wrap off-canvas-margin-padding-2">
        <div id="mobile-menu" class="slinky-mobile-menu text-left">
          @include('layouts.header.menu.menu-mobile')
        </div>
      </div>
      <div class="language-currency-wrap language-currency-wrap-modify">
        <div class="currency-wrap border-style">
          <a class="currency-active" href="#"
            >$ Dollar (US) <i class="ti-angle-down"></i
          ></a>
          <div class="currency-dropdown">
            <ul>
              <li><a href="#">MAD (MAR) </a></li>
              <li><a href="#">Dollar (USA) </a></li>
              <li><a href="#">Euro (EURO) </a></li>
            </ul>
          </div>
        </div>
        <div class="language-wrap">
          <a class="language-active" href="#"
            ><img src="{{asset('assets/store/images/icon-img/france.png')}}" alt="" /> France
            <i class="ti-angle-down"></i
          ></a>
          <div class="language-dropdown">
            <ul>
              <li>
                <a href="#"
                  ><img
                    src="{{asset('assets/store/images/icon-img/france.png')}}"
                    alt=""
                  />France
                </a>
              </li>
              <li>
                <a href="#"
                  ><img
                    src="{{asset('assets/store/images/icon-img/flag.png')}}"
                    alt=""
                  />English</a
                >
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
