@extends('layouts.layout')

@section('metaTitle', $comic['series'])

@section('mainContent')

<section class="blue-bar">

</section>

<section class="container info-wrapper">

    <div class="info-book">
        <h2>{{ $comic['title'] }}</h2>

        <div class="book-status">
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

        <p class="text-description">{{ $comic['description'] }}</p>

    </div>

    <div class="adv-wrapper">
        <p>Advertisement</p>
        <img src="{{ asset('assets/img/adv.jpg') }}" alt="adv">
    </div>

</section>

@endsection