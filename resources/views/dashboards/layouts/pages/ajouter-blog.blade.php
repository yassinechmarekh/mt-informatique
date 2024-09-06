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
                    <a href="{{ route('dashboard.blogs.ajouter-blog.post') }}">Ajouter Blog</a>
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
      @elseif(session('errorImage'))
        <div class="alert alert-danger" role="alert">
            {{ session('errorImage') }}
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
        <form class="needs-validation" action="{{ route('dashboard.blogs.ajouter-blog.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <!-- ============================================================== -->
          <!-- Informations generales -->
          <!-- ============================================================== -->
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
              <h5 class="card-header">Informations Générales</h5>
              <div class="card-body">
                <div class="row">
                  <div
                    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                  >
                    <label for="titre_min">Titre Général</label>
                    <input
                      type="text"
                      class="form-control"
                      id="titre_min"
                      name="titre_min"
                      placeholder="Titre Général du blog"
                      value=""
                      required
                    />
                    <div class="valid-feedback">Bien!</div>
                  </div>
                  <div
                    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    style="margin-top: 10px"
                  >
                    <label for="TitreBlog">Titre</label>
                    <input
                      type="text"
                      class="form-control"
                      id="TitreBlog"
                      name="TitreBlog"
                      placeholder="Titre du blog"
                      value=""
                      required
                    />
                    <div class="valid-feedback">Bien!</div>
                  </div>
                </div>
                <div class="form-row">
                  <div
                    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2"
                    style="margin-top: 10px"
                  >
                    <label for="ImagePrincipaleBlog"
                      >Image Principale 370 × 250 pixels</label
                    >
                    <input
                      type="file"
                      class="form-control"
                      id="ImagePrincipaleBlog"
                      name="ImagePrincipaleBlog"
                      placeholder=""
                      required
                    />
                    <div class="invalid-feedback">Bien!</div>
                  </div>
                </div>
                <div class="form-row">
                  <div
                    class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2"
                    style="margin-top: 10px"
                  >
                    <label for="TagBlog1">Tag 1</label>
                    <input
                      type="text"
                      class="form-control"
                      id="TagBlog1"
                      name="TagBlog1"
                      placeholder="1 ère Tag"
                      required
                    />
                    <div class="invalid-feedback">Bien!</div>
                  </div>
                  <div
                    class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2"
                    style="margin-top: 10px"
                  >
                    <label for="TagBlog2">Tag 2</label>
                    <input
                      type="text"
                      class="form-control"
                      id="TagBlog2"
                      name="TagBlog2"
                      placeholder="2 ème Tag"
                      required
                    />
                    <div class="invalid-feedback">Bien!</div>
                  </div>
                  <div
                    class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2"
                    style="margin-top: 10px"
                  >
                    <label for="TagBlog3">Tag 3</label>
                    <input
                      type="text"
                      class="form-control"
                      id="TagBlog3"
                      name="TagBlog3"
                      placeholder="3 ème Tag"
                      required
                    />
                    <div class="invalid-feedback">Bien!</div>
                  </div>
                </div>
                <div class="form-row">
                  <div
                    class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2"
                    style="margin-top: 10px"
                  >
                    <label for="TagBlog4">Tag 4</label>
                    <input
                      type="text"
                      class="form-control"
                      id="TagBlog4"
                      name="TagBlog4"
                      placeholder="4 ère Tag"
                      required
                    />
                    <div class="invalid-feedback">Bien!</div>
                  </div>
                  <div
                    class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2"
                    style="margin-top: 10px"
                  >
                    <label for="TagBlog5">Tag 5</label>
                    <input
                      type="text"
                      class="form-control"
                      id="TagBlog5"
                      name="TagBlog5"
                      placeholder="5 ème Tag"
                      required
                    />
                    <div class="invalid-feedback">Bien!</div>
                  </div>
                  <div
                    class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2"
                    style="margin-top: 10px"
                  >
                    <label for="TagBlog6">Tag 6</label>
                    <input
                      type="text"
                      class="form-control"
                      id="TagBlog6"
                      name="TagBlog6"
                      placeholder="6 ème Tag"
                      required
                    />
                    <div class="invalid-feedback">Bien!</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- end Informations generales -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Details du blog -->
          <!-- ============================================================== -->
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
              <h5 class="card-header">Détails du blog</h5>
              <div class="card-body">
                <div class="row">
                  <div
                    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                  >
                    <label for="IntroductionBlog">Introduction</label>
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    >
                      <textarea
                        class="form-control"
                        id="IntroductionBlog"
                        name="IntroductionBlog"
                        cols="120"
                        rows="5"
                        placeholder="Introduction du blog"
                        required
                      ></textarea>
                    </div>
                    <div class="valid-feedback">Bien!</div>
                  </div>
                </div>
                <div class="row">
                  <div
                    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    style="margin-top: 10px"
                  >
                    <label for="soustitre1">Sous Titre 1</label>
                    <input
                      type="text"
                      class="form-control"
                      id="soustitre1"
                      name="soustitre1"
                      placeholder="Sous Titre 1"
                      value=""
                      required
                    />
                    <div class="valid-feedback">Bien!</div>
                  </div>
                  <div
                    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                  >
                    <label for="paragraphe1">Paragraphe 1</label>
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    >
                      <textarea
                        class="form-control"
                        id="paragraphe1"
                        name="paragraphe1"
                        cols="120"
                        rows="5"
                        placeholder="1er paragraphe"
                        required
                      ></textarea>
                    </div>
                    <div class="valid-feedback">Bien!</div>
                  </div>
                </div>
                <div class="row">
                  <div
                    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    style="margin-top: 10px"
                  >
                    <label for="soustitre2">Sous Titre 2</label>
                    <input
                      type="text"
                      class="form-control"
                      id="soustitre2"
                      name="soustitre2"
                      placeholder="Sous Titre 2"
                      value=""
                      required
                    />
                    <div class="valid-feedback">Bien!</div>
                  </div>
                  <div
                    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                  >
                    <label for="paragraphe2">Paragraphe 2</label>
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    >
                      <textarea
                        class="form-control"
                        id="paragraphe2"
                        name="paragraphe2"
                        cols="120"
                        rows="5"
                        placeholder="2ème paragraphe"
                        required
                      ></textarea>
                    </div>
                    <div class="valid-feedback">Bien!</div>
                  </div>
                </div>
                <div class="row">
                  <div
                    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    style="margin-top: 10px"
                  >
                    <label for="soustitre3">Sous Titre 3</label>
                    <input
                      type="text"
                      class="form-control"
                      id="soustitre3"
                      name="soustitre3"
                      placeholder="Sous Titre 3"
                      value=""
                      required
                    />
                    <div class="valid-feedback">Bien!</div>
                  </div>
                  <div
                    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                  >
                    <label for="paragraphe3">Paragraphe 3</label>
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    >
                      <textarea
                        class="form-control"
                        id="paragraphe3"
                        name="paragraphe3"
                        cols="120"
                        rows="5"
                        placeholder="3ème paragraphe"
                        required
                      ></textarea>
                    </div>
                    <div class="valid-feedback">Bien!</div>
                  </div>
                </div>
                <div class="row">
                  <div
                    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    style="margin-top: 10px"
                  >
                    <label for="soustitre4">Sous Titre 4</label>
                    <input
                      type="text"
                      class="form-control"
                      id="soustitre4"
                      name="soustitre4"
                      placeholder="Sous Titre 4"
                      value=""
                      required
                    />
                    <div class="valid-feedback">Bien!</div>
                  </div>
                  <div
                    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                  >
                    <label for="paragraphe4">Paragraphe 4</label>
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    >
                      <textarea
                        class="form-control"
                        id="paragraphe4"
                        name="paragraphe4"
                        cols="120"
                        rows="5"
                        placeholder="4ème paragraphe"
                        required
                      ></textarea>
                    </div>
                    <div class="valid-feedback">Bien!</div>
                  </div>
                </div>
                <div class="row">
                  <div
                    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    style="margin-top: 10px"
                  >
                    <label for="soustitre5">Sous Titre 5</label>
                    <input
                      type="text"
                      class="form-control"
                      id="soustitre5"
                      name="soustitre5"
                      placeholder="Sous Titre 5"
                      value=""
                      required
                    />
                    <div class="valid-feedback">Bien!</div>
                  </div>
                  <div
                    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                  >
                    <label for="paragraphe5">Paragraphe 5</label>
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    >
                      <textarea
                        class="form-control"
                        id="paragraphe5"
                        name="paragraphe5"
                        cols="120"
                        rows="5"
                        placeholder="5ème paragraphe"
                        required
                      ></textarea>
                    </div>
                    <div class="valid-feedback">Bien!</div>
                  </div>
                </div>
                <div class="row">
                  <div
                    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    style="margin-top: 10px"
                  >
                    <label for="soustitre6">Sous Titre 6</label>
                    <input
                      type="text"
                      class="form-control"
                      id="soustitre6"
                      name="soustitre6"
                      placeholder="Sous Titre 6"
                      value=""
                      required
                    />
                    <div class="valid-feedback">Bien!</div>
                  </div>
                  <div
                    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                  >
                    <label for="paragraphe6">Paragraphe 6</label>
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    >
                      <textarea
                        class="form-control"
                        id="paragraphe6"
                        name="paragraphe6"
                        cols="120"
                        rows="5"
                        placeholder="6ème paragraphe"
                        required
                      ></textarea>
                    </div>
                    <div class="valid-feedback">Bien!</div>
                  </div>
                </div>
                <div class="form-row">
                  <div
                    class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                    style="margin-top: 10px"
                  >
                    <label for="BlogImage1">Image 1</label>
                    <input
                      type="file"
                      class="form-control"
                      id="BlogImage1"
                      name="BlogImage1"
                      placeholder=""
                      required
                    />
                    <div class="invalid-feedback">Bien!</div>
                  </div>
                  <div
                    class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2"
                    style="margin-top: 10px"
                  >
                    <label for="BlogImage2">Image 2</label>
                    <input
                      type="file"
                      class="form-control"
                      id="BlogImage2"
                      name="BlogImage2"
                      placeholder=""
                      required
                    />
                    <div class="invalid-feedback">Bien!</div>
                  </div>
                </div>
                <div class="row">
                  <div
                    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                  >
                    <label for="ConclusionBlog">Conclusion</label>
                    <div
                      class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                    >
                      <textarea
                        class="form-control"
                        id="ConclusionBlog"
                        name="ConclusionBlog"
                        cols="120"
                        rows="5"
                        placeholder="Conclusion du blog"
                        required
                      ></textarea>
                    </div>
                    <div class="valid-feedback">Bien!</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- end Details du blog -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Button form -->
          <!-- ============================================================== -->
          <div class="col-sm-12 pl-0">
            <p class="text-right">
              <button type="reset" class="btn btn-space btn-secondary">Annuler</button>
              <button type="submit" class="btn btn-space btn-primary">
                Confirmer
              </button>
            </p>
          </div>
          <!-- ============================================================== -->
          <!-- end Button form -->
          <!-- ============================================================== -->
        </form>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    @include('dashboards.layouts.footer')
  </div>
