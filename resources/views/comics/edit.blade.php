@extends('layouts/main')

@section('content')
    <main>

        <div class="container">
            <form action="{{route('comics.update', $comic->id)}}" method="POST">

                @csrf

                @method('PUT')


                <div class="mb-3">
                    <label for="title">Titolo</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{$comic->title}}">
                </div>
                <div class="mb-3">
                    <label for="description">Descrizione</label>
                    <textarea class="form-control" type="text" name="description" id="description">{{$comic->description}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb">Immagine</label>
                    <textarea class="form-control" type="text" name="thumb" id="thumb">{{$comic->thumb}}</textarea>
                </div>

                <div class="mb-3">
                    <label for="price">Prezzo</label>
                    <input class="form-control" type="text" name="price" id="price" value="{{$comic->price}}">
                </div>

                <div class="mb-3">
                    <label for="series">Serie</label>
                    <input class="form-control" type="text" name="series" id="series" value="{{$comic->series}}">
                </div>

                <div class="mb-3">
                    <label for="sale_date">Data d'uscita</label>
                    <input class="form-control" type="date" name="sale_date" id="sale_date" value="{{$comic->sale_date}}">
                </div>

                <div class="mb-3">
                    <label for="type">Tipo</label>
                    <input class="form-control" type="text" name="type" id="type" value="{{$comic->type}}">
                </div>

                <div class="mb-3">
                    <label for="artists">Artisti</label>
                    <textarea class="form-control" type="text" name="artists" id="artists">{{$comic->artists}}</textarea>
                </div>

                <div class="mb-3">
                    <label for="writers">Scrittori</label>
                    <textarea class="form-control" type="text" name="writers" id="writers">{{$comic->writers}}</textarea>
                </div>

                <button  class="btn btn-primary mb-3" type="submit">Modifica</button>
            </form>
        </div>
    </main>
@endsection