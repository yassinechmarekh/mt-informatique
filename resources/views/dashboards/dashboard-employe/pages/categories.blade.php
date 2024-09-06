@extends('dashboards.dashboard-employe.layouts.master')

@section('categories')
active
@endsection

@section('content')
@include('dashboards.layouts.pages.categories')
@endsection

@section('script')
<script src="{{asset('assets/dashboard/libs/js/modal.js')}}"></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
></script>
@endsection
