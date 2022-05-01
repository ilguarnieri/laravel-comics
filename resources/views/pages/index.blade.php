@extends('layouts.layout')

@section('metaTitle', $metaTitle)

@section('mainContent')

<section class="main">

    <div class="container">

        <!-- title -->
        <button class="btn-series">Current series</button>

        <!-- thumbs wrapper -->
        <div class="series-wrapper">
            
            @foreach ($comics as $index => $comic)
            <div class="dc__thumb">

                <a href="{{ route('pages.show', ['id' => $index]) }}">

                    <figure class="thumb-img">
                        <img src="{{ $comic['thumb'] }}">
                    </figure>
                    
                    <h4 class="thumb-title">{{ $comic['series']}}</h4>

                </a>
                
            </div>                
            @endforeach

        </div>
    </div>
    
    <!-- button load -->
    <button class="btn-load">Load More</button>
</section>

@include('componentes.mainCategories')

@endsection