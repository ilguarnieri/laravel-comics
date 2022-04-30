@extends('layouts.layout')

@section('metaTitle', $metaTitle)

@section('mainContent')

<!-- jumbo -->
<section class="jumbo">
    <img src="{{ asset('assets/img/jumbotron.jpg') }}" >
</section>

@include('componentes.mainCategories')

@endsection