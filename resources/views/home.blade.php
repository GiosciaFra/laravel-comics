@extends('layout/app')

@section('content')
<div id="hero">


    <div class="jumbo">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
    </div>

    <div class="comics container">
        <div class="current-series">
            Current Series
        </div>
    

            @foreach ($comics as $currentComic)
            <div class="comic">
                <div class="comic-image">
                    <img src="{{$currentComic['thumb']}}" alt="{{$currentComic['title']}}">
                </div>
                <span>{{ $currentComic['series'] }}</span>
            </div>
        
        @endforeach
        
        
        
        <button class="btn">
            Load more
        </button>
    </div>

</div>@endsection
