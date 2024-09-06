<!DOCTYPE html>
<html lang="fr">
  <head>
    @include('dashboards.layouts.head')
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
      @extends('dashboards.layouts.navbar')
      @auth
        @if($user->role === 'Admin')
            @extends('dashboards.dashboard-admin.layouts.menu')
        @elseif($user->role === 'Employe')
            @extends('dashboards.dashboard-employe.layouts.menu')
        @endif
      @endauth
      @yield('content')
    </div>
    @include('dashboards.layouts.links.script-links')
  </body>
</html>
