@extends('frontend.layouts.layouts')

@section('title', 'Beranda')
    
@section('content')
<!-- BEGIN SLIDER SECTION -->
@include('frontend.components.slider')
<!-- SLIDER SECTION END -->

<!-- BEGIN FEATURES SECTION -->
@include('frontend.components.layanan')
<!-- END FEATURES SECTION -->


    
@endsection