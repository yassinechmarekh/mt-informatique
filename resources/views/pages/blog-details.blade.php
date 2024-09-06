@extends('layouts.master')


@section('content')
<div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
    <div class="container">
      <div class="breadcrumb-content text-center">
        <h2 data-aos="fade-up" data-aos-delay="200">Détails du Blog</h2>
        <ul data-aos="fade-up" data-aos-delay="400">
          <li><a href="{{ route('acceuil') }}">Acceuil</a></li>
          <li><i class="ti-angle-right"></i></li>
          <li>Détails du Blog</li>
        </ul>
      </div>
    </div>
    <div
      class="breadcrumb-img-1"
      data-aos="fade-right"
      data-aos-delay="200"
    >
      <img src="{{ asset('assets/store/images/banner/breadcrumb-1.png') }}" alt="" />
    </div>
    <div class="breadcrumb-img-2" data-aos="fade-left" data-aos-delay="200">
      <img src="{{ asset('assets/store/images/banner/breadcrumb-2.png') }}" alt="" />
    </div>
  </div>
  <div class="blog-details-area pt-100 pb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="blog-details-wrapper">
            <div
              class="blog-details-img-date-wrap mb-35"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="blog-details-img">
                <img src="{{ asset($blog->imagePrincipale370x250px) }}" alt="" />
              </div>
              <div class="blog-details-date">
                <h5>01 <span>May</span></h5>
              </div>
            </div>
            <div
              class="blog-meta-2"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ul>
                <li><a href="#">Publié</a>,</li>
                <li>Par :<a href="#"> MT Informatique</a></li>
              </ul>
            </div>
            <h1 data-aos="fade-up" data-aos-delay="200">
              {{ $blog->titre }}
            </h1>
            <p data-aos="fade-up" data-aos-delay="200">
                {{ $blog->introduction }}
            </p>
            <blockquote
              class="blockquote-wrap"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="quote-img">
                <img src="{{ asset('assets/store/images/icon-img/quote.png') }}" alt="" />
              </div>
              <h2>{{ $blog->sousTitre1 }}</h2>
            </blockquote>
            <p data-aos="fade-up" data-aos-delay="200">
                {{ $blog->paragraph1 }}
            </p>
            <blockquote
              class="blockquote-wrap"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="quote-img">
                <img src="{{ asset('assets/store/images/icon-img/quote.png') }}" alt="" />
              </div>
              <h2>{{ $blog->sousTitre2 }}</h2>
            </blockquote>
            <p data-aos="fade-up" data-aos-delay="200">
                {{ $blog->paragraph2 }}
            </p>
            <blockquote
              class="blockquote-wrap"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="quote-img">
                <img src="{{ asset('assets/store/images/icon-img/quote.png') }}" alt="" />
              </div>
              <h2>{{ $blog->sousTitre3 }}</h2>
            </blockquote>
            <p data-aos="fade-up" data-aos-delay="200">
                {{ $blog->paragraph3 }}
            </p>
            <blockquote
              class="blockquote-wrap"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="quote-img">
                <img src="{{ asset('assets/store/images/icon-img/quote.png') }}" alt="" />
              </div>
              <h2>{{ $blog->sousTitre4 }}</h2>
            </blockquote>
            <p data-aos="fade-up" data-aos-delay="200">
                {{ $blog->paragraph4 }}
            </p>
            <blockquote
              class="blockquote-wrap"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="quote-img">
                <img src="{{ asset('assets/store/images/icon-img/quote.png') }}" alt="" />
              </div>
              <h2>{{ $blog->sousTitre5 }}</h2>
            </blockquote>
            <p data-aos="fade-up" data-aos-delay="200">
                {{ $blog->paragraph5 }}
            </p>
            <blockquote
              class="blockquote-wrap"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="quote-img">
                <img src="{{ asset('assets/store/images/icon-img/quote.png') }}" alt="" />
              </div>
              <h2>{{ $blog->sousTitre6 }}</h2>
            </blockquote>
            <p data-aos="fade-up" data-aos-delay="200">
                {{ $blog->paragraph6 }}
            </p>
            <div class="blog-details-middle-img-wrap">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-12">
                  <div
                    class="blog-details-middle-img mb-30"
                    data-aos="fade-up"
                    data-aos-delay="200"
                  >
                    <img
                      src="{{ asset($blog->imageSecondaire1) }}"
                      alt=""
                    />
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-12">
                  <div
                    class="blog-details-middle-img mb-30"
                    data-aos="fade-up"
                    data-aos-delay="400"
                  >
                    <img
                      src="{{ asset($blog->imageSecondaire2) }}"
                      alt=""
                    />
                  </div>
                </div>
              </div>
            </div>
            <p data-aos="fade-up" data-aos-delay="200">
              {{ $blog->conclusion }}
            </p>
            <div class="tag-social-wrap">
              <div class="tag-wrap" data-aos="fade-up" data-aos-delay="200">
                <span>Tags:</span>
                <ul>
                  <li><a href="#">{{ $tags->Tag1 }}</a>,</li>
                  <li><a href="#">{{ $tags->Tag2 }}</a>,</li>
                  <li><a href="#">{{ $tags->Tag3 }}</a>,</li>
                  <li><a href="#">{{ $tags->Tag4 }}</a>,</li>
                  <li><a href="#">{{ $tags->Tag5 }}</a>,</li>
                  <li><a href="#">{{ $tags->Tag6 }}</a></li>
                </ul>
              </div>
              <div
                class="social-comment-digit-wrap"
                data-aos="fade-up"
                data-aos-delay="400"
              >
                <div class="comment-digit">
                  <a href="#">2 <i class="fa fa-comments"></i></a>
                </div>
              </div>
            </div>
            <div
              class="blog-author-wrap-2"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="blog-author-img-2">
                <img src="{{ asset('assets/store/images/blog/blog-author.png') }}" alt="" />
              </div>
              <div class="blog-author-content-2">
                <h2>MT Informatique</h2>
                <p>
                  MT Informatique est une boutique spécialisée dans la
                  fourniture d'équipements informatiques, électroniques et
                  télécoms. Nôtre catalogue comprend une gamme variée
                  d'articles tels que des ordinateurs, des serveurs, des
                  imprimantes, des consommables, des équipements réseau et
                  télécoms, ainsi que divers accessoires informatiques.
                </p>
                <div class="social-icon-style-3">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-pinterest-p"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
            <div
              class="blog-next-previous-post"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="blog-prev-post-wrap">
                <div class="blog-prev-post-icon">
                  <a href="{{ route('blog.blog-details',$blog_precedent->slug) }}"><i class="fa fa-angle-left"></i></a>
                </div>
                <div class="blog-prev-post-content">
                  <h3>
                    <a href="{{ route('blog.blog-details',$blog_precedent->slug) }}">{{ $blog_precedent->titre_min }} </a>
                  </h3>
                  <span>June 25, 2023</span>
                </div>
              </div>
              <div class="blog-next-post-wrap">
                <div class="blog-next-post-icon">
                  <a href="{{ route('blog.blog-details',$blog_suivant->slug) }}"> <i class="fa fa-angle-right"></i> </a>
                </div>
                <div class="blog-next-post-content">
                  <h3>
                    <a href="{{ route('blog.blog-details',$blog_suivant->slug) }}">{{ $blog_suivant->titre_min }}</a>
                  </h3>
                  <span>June 25, 2023</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="sidebar-wrapper blog-sidebar-mt">
            <div
              class="sidebar-widget mb-50"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="search-wrap-3">
                <form class="search-3-form" action="#">
                  <input placeholder="Search*" type="text" />
                  <button class="button-search">
                    <i class="fa fa-search"></i>
                  </button>
                </form>
              </div>
            </div>
            <div
              class="sidebar-widget mb-50"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="blog-author-content text-center">
                <a href="blog-details.html"
                  ><img src="{{ asset('assets/store/images/blog/blog-author.png') }}" alt=""
                /></a>
                <h2>MT Informatique</h2>
                <h4>Rédacteur de blog</h4>
                <div class="social-icon-style-1">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-pinterest-p"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
            <div
              class="sidebar-widget mb-40"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="sidebar-widget-title-2 mb-25">
                <h3>Categories</h3>
              </div>
              <div class="sidebar-list-style-2">
                <ul>
                  <li>
                    <a href="#">Technologie de bureau</a>
                  </li>
                  <li><a href="#">Sécurité informatique</a></li>
                  <li><a href="#">Télécommunications</a></li>
                </ul>
              </div>
            </div>
            <div
              class="sidebar-widget mb-40"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="sidebar-widget-title-2 mb-30">
                <h3>Dernier Poste</h3>
              </div>

              <div class="latest-post-wrap" style="margin-bottom: 20px;">
                @foreach ($blogs_lasted as $blog_lasted)
                    <div class="single-latest-post">
                    <div class="latest-post-img">
                        <a href="{{ route('blog.blog-details',$blog_lasted->slug) }}"
                        ><img
                            src="{{ asset($blog_lasted->imagePrincipale115x90px) }}"
                            alt=""
                        /></a>
                    </div>
                    <div class="latest-post-content">
                        <span>01 May 2023</span>
                        <h4>
                        <a href="{{ route('blog.blog-details',$blog_lasted->slug) }}"
                            >{{ Str::limit($blog_lasted->titre,20) }}
                        </a>
                        </h4>
                        <div class="latest-post-btn">
                        <a href="{{ route('blog.blog-details',$blog_lasted->slug) }}"
                            >Continuer la lecture...</a
                        >
                        </div>
                    </div>
                    </div>
                @endforeach
            </div>
            <div
              class="sidebar-widget mb-35"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="sidebar-widget-title-2 mb-30">
                <h3>Tags</h3>
              </div>
              <div class="sidebar-widget-tag-2">
                <a href="#">{{ $tags->Tag1 }}</a>
                <a href="#">{{ $tags->Tag2 }}</a>
                <a href="#">{{ $tags->Tag3 }}</a>
                <a href="#">{{ $tags->Tag4 }}</a>
                <a href="#">{{ $tags->Tag5 }}</a>
              </div>
            </div>
            <div
              class="sidebar-widget"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="sidebar-banner">
                <a href="product-details.html"
                  ><img src="{{ asset('assets/store/images/banner/banner-29.jpg') }}" alt=""
                /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
