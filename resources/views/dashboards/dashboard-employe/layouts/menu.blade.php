@extends('dashboards.layouts.menu')

@section('route-dashboard')
{{ route('employe.dashboard') }}
@endsection

@section('route-commandes')
{{ route('employe.dashboard.commandes') }}
@endsection

@section('route-categories')
{{ route('employe.dashboard.categories') }}
@endsection

@section('route-nos-produits')
{{ route('employe.dashboard.produits.nos-produits') }}
@endsection

@section('route-ajouter-produit')
{{ route('employe.dashboard.produits.ajouter-produit') }}
@endsection

@section('route-nos-blogs')
{{ route('employe.dashboard.blogs.nos-blogs') }}
@endsection

@section('route-ajouter-blogs')
{{ route('employe.dashboard.blogs.ajouter-blog') }}
@endsection

@section('route-profile')
{{ route('employe.dashboard.profile') }}
@endsection


