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
<section class="container book-wrapper">

    <div class="book-card">
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
<section class="comic-info">
    <div class="container">

        <div class="col-2">
            <h2 class="col-title">Talent</h2>

            <div class="info-wrapper">
                <div class="info-title">
                    <p>Art by:</p>
                </div>

                <div class="info-detail">
                    <p>                        
                        @foreach ($comic['artists'] as $key => $artist)
                        
                        <span class="text-blue">
                            <a href="#">
                                {{ $artist }}</span>@if($key < count($comic['artists'])-1),@endif
                            </a>
        
                        @endforeach                        
                    </p>
                </div>
            </div>

            <div class="info-wrapper">
                <div class="info-title">
                    <p>Written by:</p>
                </div>

                <div class="info-detail">
                    <p>                        
                        @foreach ($comic['writers'] as $key => $writer)
                        
                        <span class="text-blue">
                            <a href="#">
                                {{ $writer }}</span>@if($key < count($comic['writers'])-1),@endif
                            </a>
        
                        @endforeach                        
                    </p>
                </div>
            </div>
        </div>

        <div class="col-2">
            <h2 class="col-title">Specs</h2>

            <div class="info-wrapper">
                <div class="info-title">
                    <p>Series:</p>
                </div>

                <div class="info-detail">
                    <p class="text-blue text-type">                        
                        <a href="#">{{$comic['type']}}  </a>                      
                    </p>
                </div>
            </div>

            <div class="info-wrapper">
                <div class="info-title">
                    <p>U.S. Price:</p>
                </div>

                <div class="info-detail">
                    <p>                        
                        {{$comic['price']}}                        
                    </p>
                </div>
            </div>

            <div class="info-wrapper">
                <div class="info-title">
                    <p>On Sale Date:</p>
                </div>

                <div class="info-detail">
                    <p>                        
                        {{ date('M d Y', strtotime($comic['sale_date'])) }}                        
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

@include('componentes.mainCategories')

@endsection