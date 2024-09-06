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
      @extends('dashboards.dashboard-employe.layouts.menu')
      @yield('content')
    </div>
    @include('dashboards.layouts.links.script-links')
  </body>
</html>


@section('profile-navbar')
    <div class="nav-user-info">
        <h5 class="mb-0 text-white nav-user-name">
        {{ $employe->PrenomEmploye }} {{ $employe->NomEmploye }}
        </h5>
        <span class="status"></span
        ><span class="ml-2">En ligne</span>
    </div>
@endsection

@section('route-profile')
{{ route('employe.dashboard.profile') }}
@endsection
