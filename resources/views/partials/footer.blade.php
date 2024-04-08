<footer>

    
    <div class="footer-top">
        <div class="container">
            <div class="links">
                @foreach ($footerLinks as $currentFooterLink)
                <div class="link-list">
                    <h4>{{ $currentFooterLink['title'] }}</h4>
                    
                    <ul>
                        @foreach ($currentFooterLink['links'] as $link)
                        <li>{{ $link }}</li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
                
            </div>
            
            <div class="big-logo">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
            </div>
            
        </div>
    </div>
    
    <div class="footer-bottom">
        <div class="container">
            <div class="cta">
                    <button class="btn">
                        Sign-up now!
                    </button>
            </div>
            <div class="social-links">
                <strong>Follow Us</strong>
                <ul>
                    @foreach ($socials as $currentSocial)
                    <li>
                        <img src="{{$currentSocial['icon']}}" alt="">
                    </li>
                    @endforeach

                    
                </ul>
            </div>
        </div>
    </div>
</footer>