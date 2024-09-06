@extends('dashboards.layouts.menu')

@section('route-dashboard')
{{ route('admin.dashboard') }}
@endsection

@section('route-commandes')
{{ route('admin.dashboard.commandes') }}
@endsection

@section('route-categories')
{{ route('admin.dashboard.categories') }}
@endsection

@section('route-nos-produits')
{{ route('admin.dashboard.produits.nos-produits') }}
@endsection

@section('route-ajouter-produit')
{{ route('admin.dashboard.produits.ajouter-produit') }}
@endsection

@section('route-nos-blogs')
{{ route('admin.dashboard.blogs.nos-blogs') }}
@endsection

@section('route-ajouter-blogs')
{{ route('admin.dashboard.blogs.ajouter-blog') }}
@endsection

@section('route-profile')
{{ route('admin.dashboard.profile') }}
@endsection

