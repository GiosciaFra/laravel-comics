<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics</title>
    
    @vite('resources/js/app.js')
</head>
<body>

    @include('partials/header')

    <div id="hero">


        <div class="jumbo">
            <img src="{{ Vite::asset('resources/img/jumbotron.png') }} alt="">
        </div>
        <div class="comics container">
            <div class="current-series">
                Current Series
            </div>
           
            <div class="comic">

                @foreach ($comics as $currentComic)
    
                <div>
                    <img src="{{$currentComic['thumb']}}" alt="">
                </div>
    
    
                <span>
                    {{ $currentComic['title'] }}
                </span>

            </div>
        </div>

        @endforeach

        
            <button class="btn">
                Load more
            </button>

    </div>

  
</body>
</html>