@extends('layouts/main')

@section('content')
<div class="container-jumbotron">
    <img src='{{Vite::asset('resources/images/jumbotron.jpg')}}' alt="Jumbotron">
</div>
<main>
    <div id="container-main">
        <div id="main-links">
            <ul>
                
                <li>
                    <img src='{{Vite::asset('resources/images/buy-comics-digital-comics.png')}}' alt="">
                    <span>Digital Comics</span>
                </li>

                <li>
                    <img src='{{Vite::asset('resources/images/buy-comics-merchandise.png')}}' alt="">
                    <span>Dc Merchandise</span>
                </li>
                <li>
                    <img src='{{Vite::asset('resources/images/buy-comics-subscriptions.png')}}' alt="">
                    <span>Subscription</span>
                </li>
                <li>
                    <img src='{{Vite::asset('resources/images/buy-comics-shop-locator.png')}}' alt="">
                    <span>Comic Shop Location</span>
                </li>
                <li>
                    <img src='{{Vite::asset('resources/images/buy-dc-power-visa.svg')}}' alt="">
                    <span>Dc Power Visa</span>
                </li>
               
            </ul>
        </div>
    </div>

</main>

@endsection