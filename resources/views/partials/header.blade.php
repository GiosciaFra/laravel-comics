<nav>
    <div class="container">
        <img class="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        <ul class="links">
            @foreach ($navLinks as $currentLink)

            <li>
                <a href="">{{$currentLink}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</nav>
