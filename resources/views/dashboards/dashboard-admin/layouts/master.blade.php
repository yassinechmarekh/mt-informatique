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
      @extends('dashboards.dashboard-admin.layouts.menu')
      @yield('content')
    </div>
    @include('dashboards.layouts.links.script-links')
  </body>
</html>

@section('profile-navbar')
    <div class="nav-user-info">
        <h5 class="mb-0 text-white nav-user-name">
            {{ $admin->PrenomAdmin }} {{ $admin->NomAdmin }} 
        </h5>
        <span class="status"></span
        ><span class="ml-2">En ligne</span>
    </div>
@endsection

@section('route-profile')
{{ route('admin.dashboard.profile') }}
@endsection

@section('employes-menu')
    <li class="nav-item">
        <a class="nav-link @yield('employes')" href="{{ route('admin.dashboard.employes') }}"
        ><i class="fa fa-users"></i>Employées</a
        >
    </li>
@endsection


