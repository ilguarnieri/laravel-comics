@extends('layouts.layout')

@section('metaTitle', $comic['series'])

@section('mainContent')

{{-- thumb --}}
<section class="blue-bar">
    <div class="container">
        <div class="thumb-wrapper">
            
            {{-- IMG --}}
            <figure class="thumb-img">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
            </figure>

            {{-- type --}}
            <div class="type-wrapper">
                <p>{{ $comic['type'] }}</p>
            </div>

            {{-- gallery --}}
            <div class="gallery-wrapper">
                <p>View Gallery</p>
            </div>
        </div>
    </div>
</section>


{{-- title and descriptioncomic book --}}
<section class="container info-wrapper">

    <div class="info-book">
        {{-- title --}}
        <h1>{{ $comic['title'] }}</h1>

        <div class="book-status">
            {{-- price --}}
            <div class="book-price">
                <p><span class="text-transparent">
                    U.S. Price: 
                </span>
                {{ $comic['price'] }}</p>
                <p class="text-transparent">AVAILABLE</p>
            </div>
            <div class="book-check">
                <p>Check Availability</p>
            </div>
        </div>
        {{-- description --}}
        <p class="text-description">{{ $comic['description'] }}</p>
    </div>

    {{-- ADV --}}
    <div class="adv-wrapper">
        <p class="adv-title">Advertisement</p>
        <img src="{{ asset('assets/img/adv.jpg') }}" alt="adv">
    </div>
</section>


{{-- talent & spec book --}}
<section class="talent-specs">
    <div class="container">

        <div class="talent-book">
            <h2 class="">Talent</h2>

        </div>

        <div class="specs-book">
            <h2 class="">Spacs</h2>

        </div>
    </div>
</section>

@include('componentes.mainCategories')

@endsection