<footer>
    <div id="container-footer">
        <div id="container-list">
            {{-- @foreach($footerLinks as $footerLink)
            <ul>
                <strong>{{$footerLink['title']}}</strong>
                @foreach($footerLink['links'] as $singleLink)
                <li>{{$singleLink}}</li>
                @endforeach
            </ul>
            @endforeach --}}
            <div id='background-logo'>
                <img src="{{Vite::asset('resources/images/dc-logo-bg.png')}}" alt="">
            </div>
        </div>

    </div>
    <div id="container-bg-footer-nav">
        <div id="container-footer-nav">
            <button>
                SIGN-UP NOW
            </button>
            <div id="container-icons">
                <span><strong> FOLLOW US </strong></span>
                <img src="{{Vite::asset('resources/images/footer-facebook.png')}}" alt="">
                <img src="{{Vite::asset('resources/images/footer-periscope.png')}}" alt="">
                <img src="{{Vite::asset('resources/images/footer-pinterest.png')}}" alt="">
                <img src="{{Vite::asset('resources/images/footer-twitter.png')}}" alt="">
                <img src="{{Vite::asset('resources/images/footer-youtube.png')}}" alt="">

            </div>
        </div>
    </div>
</footer>