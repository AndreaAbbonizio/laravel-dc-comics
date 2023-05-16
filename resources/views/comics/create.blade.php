@extends('layouts/main')

@section('content')
    <main>

        <div class="container">
            <form action="{{route('comics.store')}}" method="POST">

                @csrf
                <div class="mb-3">
                    <label for="title">Titolo</label>
                    <input type="text" name="title" id="title">
                </div>
                <div class="mb-3">
                    <label for="description">Descrizione</label>
                    <input type="text" name="description" id="description">
                </div>
                <div class="mb-3">
                    <label for="thumb">Immagine</label>
                    <input type="text" name="thumb" id="thumb">
                </div>

                <div class="mb-3">
                    <label for="price">Prezzo</label>
                    <input type="text" name="price" id="price">
                </div>

                <div class="mb-3">
                    <label for="series">Serie</label>
                    <input type="text" name="series" id="series">
                </div>

                <div class="mb-3">
                    <label for="sale_date">Data d'uscita</label>
                    <input type="text" name="sale_date" id="sale_date">
                </div>

                <div class="mb-3">
                    <label for="type">Tipo</label>
                    <input type="text" name="type" id="type">
                </div>

                <div class="mb-3">
                    <label for="artists">Artisti</label>
                    <input type="text" name="artists" id="artists">
                </div>

                <div class="mb-3">
                    <label for="writers">Scrittori</label>
                    <input type="text" name="writers" id="writers">
                </div>

                <button class="btn btn-primary" type="submit">Aggiungi</button>
            </form>
        </div>
    </main>
@endsection