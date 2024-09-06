@extends('layouts.master')


@section('content')
<div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
    <div class="container">
      <div class="breadcrumb-content text-center">
        <h2 data-aos="fade-up" data-aos-delay="200">Liste d'envies</h2>
        <ul data-aos="fade-up" data-aos-delay="400">
          <li><a href="{{ route('acceuil') }}">Acceuil</a></li>
          <li><i class="ti-angle-right"></i></li>
          <li>Liste d'envies</li>
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
  <div class="wishlist-area pb-100 pt-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <form action="#">
            <div class="wishlist-table-content">
              <div class="table-content table-responsive">
                <table>
                  <thead>
                    <tr>
                      <th class="width-remove"></th>
                      <th class="width-thumbnail"></th>
                      <th class="width-name">PRODUIT</th>
                      <th class="width-price">PRIX UNITAIRE</th>
                      <th class="width-stock-status">Status du stock</th>
                      <th class="width-wishlist-cart"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (session('wishlist'))
                        @php
                            $wishlist = session('wishlist');
                        @endphp
                        @foreach ($wishlist as $w)
                            <tr>
                                <td class="product-remove"><a href="{{ route('supprimer.wishlist',$w['idproduit']) }}">×</a></td>
                                <td class="product-thumbnail">
                                <a href="{{ route('produit-details',$w['slug']) }}"
                                    ><img src="{{ asset('assets/store/images/product/'. $w['image']) }}" alt=""
                                /></a>
                                </td>
                                <td class="product-name">
                                <h5>
                                    <a href="{{ route('produit-details',$w['slug']) }}"
                                    >{{ $w['titre'] }}</a
                                    >
                                </h5>
                                </td>
                                <td class="product-wishlist-price">
                                <span class="amount">{{ $w['prix'] }}</span>
                                </td>
                                <td class="stock-status">
                                <span><i class="las la-check"></i> En Stock</span>
                                </td>
                                <td class="wishlist-cart btn-hover">
                                    <form action="{{ route('ajouter.panier') }}" method="POST">
                                        @csrf
                                        <input type="hidden" id="idProduit" name="idProduit" value="{{ $w['idproduit'] }}">
                                        <input type="hidden" id="quantite" name="quantite" value="1">
                                        <button type="submit" class="product-action-btn-2" style="border:none; background-color:white;"><a>Ajouter au panier</a></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <td><p>Liste d'envis vide !!</p></td>
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
