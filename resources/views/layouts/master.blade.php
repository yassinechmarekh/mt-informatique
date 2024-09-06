<!DOCTYPE html>
<html lang="fr">
  <head>
    @include('layouts.head')
  </head>

  <body>
    <div class="main-wrapper main-wrapper-2">
      @include('layouts.header.navbar.navbar')
      <!-- mini cart start -->
      @include('layouts.header.panier')
      @yield('content')
      @include('layouts.footer')
      <!-- Mobile Menu start -->
      @include('layouts.header.navbar.navbar-mobile')
    </div>
    @include('layouts.links.script-links')
  </body>
</html>
