<!-- ============================================================== -->
      <!-- left sidebar -->
      <!-- ============================================================== -->
      <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav flex-column">
                <li class="nav-divider">Menu</li>
                <li class="nav-item">
                  <a class="nav-link @yield('dashboard')" href="@yield('route-dashboard')"
                    ><i class="fas fa-home"></i>Dashboard
                    <span class="badge badge-success">6</span></a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link @yield('commandes')" href="@yield('route-commandes')"
                    ><i class="fa fa-cube"></i>Commandes</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link @yield('categories')" href="@yield('route-categories')"
                    ><i class="fa fa-cubes"></i>Catégories</a
                  >
                </li>
                <li class="nav-item">
                    <a
                      class="nav-link @yield('produits')"
                      href="#"
                      data-toggle="collapse"
                      aria-expanded="false"
                      data-target="#submenu-4"
                      aria-controls="submenu-4"
                      ><i class="far fa-clone"></i>Produits</a
                    >
                    <div id="submenu-4" class="collapse submenu">
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link" href="@yield('route-nos-produits')"
                            >Nos Produits</a
                          >
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="@yield('route-ajouter-produit')"
                            >Ajouter Produit</a
                          >
                        </li>
                      </ul>
                    </div>
                </li>
                @yield('employes-menu')
                <li class="nav-item">
                  <a
                    class="nav-link @yield('blogs')"
                    href="#"
                    data-toggle="collapse"
                    aria-expanded="false"
                    data-target="#submenu-10"
                    aria-controls="submenu-10"
                    ><i class="fas fa-f fa-folder"></i>Blogs</a
                  >
                  <div id="submenu-10" class="collapse submenu">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link" href="@yield('route-nos-blogs')">Nos Blogs</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="@yield('route-ajouter-blogs')">Ajouter un blog</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link @yield('profile')" href="@yield('route-profile')"
                    ><i class="fa fa-user"></i>Profile</a
                  >
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- end left sidebar -->
      <!-- ============================================================== -->
