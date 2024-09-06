<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
      <!-- ============================================================== -->
      <!-- pageheader  -->
      <!-- ============================================================== -->
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="page-header">
            <h2 class="pageheader-title">
                @if($user->role === 'Admin')
                    Admin Dashboard
                @elseif($user->role === 'Employe')
                    Employe Dashboard
                @endif
            </h2>
            <div class="page-breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    @if($user->role === 'Admin')
                        <a href="{{ route('admin.dashboard.blogs.nos-blogs') }}" class="breadcrumb-link"
                        >Blogs</a>
                    @elseif($user->role === 'Employe')
                        <a href="{{ route('employe.dashboard.blogs.nos-blogs') }}" class="breadcrumb-link"
                        >Blogs</a>
                    @endif
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    @if($user->role === 'Admin')
                        <a href="{{ route('admin.dashboard.blogs.nos-blogs') }}">Nos Blogs</a>
                    @elseif($user->role === 'Employe')
                        <a href="{{ route('employe.dashboard.blogs.nos-blogs') }}">Nos Blogs</a>
                    @endif
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- end pageheader  -->
      <!-- ============================================================== -->
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
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <h5
              class="card-header d-flex justify-content-between align-items-center"
            >
              Ajouter un Blog
              <button type="button" class="btn btn-sm btn-outline-light">
                @if($user->role === 'Admin')
                    <a href="{{ route('admin.dashboard.blogs.ajouter-blog') }}">Ajouter</a>
                @elseif($user->role === 'Employe')
                    <a href="{{ route('employe.dashboard.blogs.ajouter-blog') }}">Ajouter</a>
                @endif
              </button>
            </h5>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- nos blogs -->
      <!-- ============================================================== -->
      <div class="row">
        @foreach ($blogs as $blog)
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                <img
                    class="img-fluid"
                    src="{{ asset($blog->imagePrincipale370x250px) }}"
                    alt="Card image cap"
                />
                <div class="card-body">
                    <h3 class="card-title">{{ $blog->titre_min }}</h3>
                    <p class="card-text">
                        {{ $blog->titre }}
                    </p>
                    @if($user->role === 'Admin')
                        <a href="{{ route('admin.dashboard.blogs.modifier-blog',$blog->slug) }}" class="btn btn-primary">Modifier</a>
                    @elseif($user->role === 'Employe')
                        <a href="{{ route('employe.dashboard.blogs.modifier-blog',$blog->slug) }}" class="btn btn-primary">Modifier</a>
                    @endif
                    <a
                    href="#"
                    class="btn btn-danger"
                    data-bs-toggle="modal"
                    data-bs-target="#supprimer{{ $blog->id }}"
                    >Supprimer</a
                    >
                </div>
                </div>
            </div>
        @endforeach
      <!-- ============================================================== -->
      <!-- end nos blogs -->
      <!-- ============================================================== -->
    </div>
    <div class="d-flex justify-content-center">
        {{ $blogs->links() }}
    </div>
  </div>
  <!-- Modal supprimer -->
  @include('dashboards.layouts.pages.section.modals.blogs.supprimer-blog')
  <!-- ============================================================== -->
  <!-- footer -->
  <!-- ============================================================== -->
  @include('dashboards.layouts.footer')
</div>
