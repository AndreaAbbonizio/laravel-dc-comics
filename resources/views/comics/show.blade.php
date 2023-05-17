@extends('layouts/main')


@section('content')
<div class="container-jumbotron">
    <img src='{{Vite::asset('resources/images/jumbotron.jpg')}}' alt="Jumbotron">
</div>

<main>
    <div class="thumb-container">
        <div class="img-container">
            <img src="{{$comic->thumb}}" alt="">
        </div>
    </div>
    <div class="container">
        <div class="comic">
            <div class="comic-left">
                <h1>
                    {{$comic->title}}
                </h1>
                <div class="container-price">
                    <div class="price">
                        U,S. Price:  <span>{{$comic->price}}</span>
                    </div>
                    <div class="availability">
                        Check Availability
                    </div>
                </div>
                <p>
                    {{$comic->description}}
                </p>
            </div>
            <div class="comic-right">
                <p>ADVERTISEMENT</p>
                <div class="container-img">
                    <img src="{{Vite::asset('resources/images/image-main.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="comic-details">
            <div class="details-left">
                <h2>
                    Talent
                </h2>
    
                <p class="details">Art by: <span>{{$comic->artists}} </span></p>
    
                <p class="details">Written by: <span>{{$comic->writers}} </span></p>
            </div>

            <div class="details-right">
                <h2>
                    Specs
                </h2>

                <div class="details">
                    Series :   <span>{{$comic->series}} </span>
                </div>

                <div class="details">
                    U.S price :   <span>{{$comic->price}} </span>
                </div>

                <div class="details">
                    On Sale Date :   <span>{{$comic->sale_date}} </span>
                </div>
                

            </div>

        </div>

        <div class="delete-update">
            <button  class="btn btn-primary mb-3" type="submit"><a href="{{route('comics.edit', $comic->id)}}">Modifica</a></button>

            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                @csrf
                @method('DELETE')
        
                <button class="btn btn-danger" type="submit">CANCELLA</button>
              </form>

        </div>
        
    </div>
</main>
@endsection