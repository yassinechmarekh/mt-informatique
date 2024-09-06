@extends('dashboards.dashboard-employe.layouts.master')

@section('produits')
active
@endsection

@section('content')
@include('dashboards.layouts.pages.nos-produits')
@endsection

@section('script')
<script src="{{asset('assets/dashboard/libs/js/modal.js')}}"></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
></script>
@endsection

@section('role')
Employe
@endsection

@section('route-nos-produits')
{{ route('employe.dashboard.produits.nos-produits') }}
@endsection

@section('route-ajouter-produit')
{{ route('employe.dashboard.produits.ajouter-produit') }}
@endsection

{{-- @section('route-produit-details')
{{ route('employe.dashboard.produits.produit-details',$produit->slug) }}
@endsection --}}

