@extends('layouts.master')


@section('content')
<div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
    <div class="container">
      <div class="breadcrumb-content text-center">
        <h2 data-aos="fade-up" data-aos-delay="200">Contact</h2>
        <ul data-aos="fade-up" data-aos-delay="400">
          <li><a href="{{ route('acceuil') }}">Acceuil</a></li>
          <li><i class="ti-angle-right"></i></li>
          <li>Contact</li>
        </ul>
      </div>
    </div>
    <div class="breadcrumb-img-1" data-aos="fade-right" data-aos-delay="200">
      <img src="{{ asset('assets/store/images/banner/breadcrumb-1.png') }}" alt="" />
    </div>
    <div class="breadcrumb-img-2" data-aos="fade-left" data-aos-delay="200">
      <img src="{{ asset('assets/store/images/banner/breadcrumb-2.png') }}" alt="" />
    </div>
  </div>
  <div class="contact-us-area pt-100 pb-65">
    <div class="container">
      <div
        class="section-title-4 text-center mb-50"
        data-aos="fade-up"
        data-aos-delay="200"
      >
        <h2>N'hésitez pas à nous contacter si vous avez besoin d'aide</h2>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
          <div
            class="contact-us-info-wrap mb-30"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="contact-us-info-title">
                <h3>Téléphone &amp; Fax</h3>
            </div>
            <div class="contact-us-info">
                <p>Tél : 06-63-44-02-17 </p>
                <span>Fax : 05-22-99-62-24</span>
            </div>
            <div class="contact-us-info">
              <p>Horaires d'assistance : du lundi au vendredi</p>
              <span>9h à 20h</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
          <div
            class="contact-us-info-wrap mb-30"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <div class="contact-us-info-title">
                <h3>Adresse</h3>
            </div>
            <div class="contact-us-info">
                <p>Rue Soumaya Imm 82, 4ème Etage N°16 Quartier Palmier - Casablanca</p>
            </div>
            <div class="contact-us-info">
              <p>Horaires d'assistance : du lundi au vendredi</p>
              <span>9h à 20h</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
          <div
            class="contact-us-info-wrap mb-30"
            data-aos="fade-up"
            data-aos-delay="600"
          >
            <div class="contact-us-info-title">
              <h3>Email</h3>
            </div>
            <div class="contact-us-info">
              <p>Email :</p>
              <span>contact@mtinformatique.ma </span>
            </div>
            <div class="contact-us-info">
                <p>Horaires d'assistance : du lundi au vendredi</p>
                <span>9h à 20h</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="map pt-120" data-aos="fade-up" data-aos-delay="200">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.8879954408417!2d-7.6316202247118134!3d33.58225724240138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d3bae505d689%3A0x7f4e18dfe7b242fd!2sMT%20INFORMATIQUE!5e0!3m2!1sfr!2sma!4v1712315905373!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="contact-form-area pt-90 pb-100">
    <div class="container">
      <div
        class="section-title-4 text-center mb-55"
        data-aos="fade-up"
        data-aos-delay="200"
      >
        <h2>Contactez-nous !</h2>
      </div>
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
      <div
        class="contact-form-wrap"
        data-aos="fade-up"
        data-aos-delay="200"
      >
        <form
          class="contact-form-style"
          id="contact-form"
          action="{{ route('contact.send') }}"
          method="POST"
        >
             @csrf
            <div class="row">
                <div class="col-lg-4">
                    <input name="name" type="text" placeholder="Nom*" />
                    <input name="email" type="email" placeholder="Email*" />
                    <input name="subject" type="text" placeholder="Subjet*" />
                    <input name="phone" type="text" placeholder="Tél*" />
                </div>
                <div class="col-lg-8">
                    <textarea name="message" placeholder="Message"></textarea>
                </div>
                <div
                class="col-lg-12 col-md-12 col-12 contact-us-btn btn-hover"
                >
                    <button type="submit" class="submit" >Envoyer Message</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>

@endsection
