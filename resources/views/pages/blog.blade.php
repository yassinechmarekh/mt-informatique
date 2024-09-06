@extends('layouts.master')


@section('content')
<div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
    <div class="container">
      <div class="breadcrumb-content text-center">
        <h2 data-aos="fade-up" data-aos-delay="200">Blog</h2>
        <ul data-aos="fade-up" data-aos-delay="400">
          <li><a href="{{ route('acceuil') }}">Acceuil</a></li>
          <li><i class="ti-angle-right"></i></li>
          <li>Blog</li>
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
    <div class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                @php
                    $i=200;
                @endphp
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-wrap mb-50" data-aos="fade-up" data-aos-delay="{{ $i += 200 }}">
                            <div class="blog-img-date-wrap mb-25">
                                <div class="blog-img">
                                    <a href="{{ route('blog.blog-details',$blog->slug) }}"><img src="{{ asset($blog->imagePrincipale370x250px) }}" alt=""></a>
                                </div>
                                <div class="blog-date">
                                    <h5>05 <span>May</span></h5>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#">Publié</a>,</li>
                                        <li>Par:<a href="#"> MT Informatique</a></li>
                                    </ul>
                                </div>
                                <h3><a href="{{ route('blog.blog-details',$blog->slug) }}">{{ $blog->titre_min }}</a></h3>
                                <p>{{ Str::limit($blog->titre,80) }}</p>
                                <div class="blog-btn-2 btn-hover">
                                    <a class="btn hover-border-radius theme-color" href="{{ route('blog.blog-details',$blog->slug) }}">Lire Plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
@endsection
