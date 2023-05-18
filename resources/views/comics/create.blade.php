@extends('layouts/main')

@section('content')
    <main>

        <div class="container">
            <form action="{{route('comics.store')}}" method="POST">

                @csrf
                <div class="mb-3">
                    <label for="title">Titolo</label>
                    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{old('title')}}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description">Descrizione</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" type="text" name="description" id="description">{{old('description')}}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="thumb">Immagine</label>
                    <textarea class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb" id="thumb">{{old('thumb')}}</textarea>
                    @error('thumb')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price">Prezzo</label>
                    <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" id="price" value="{{old('price')}}">
                    @error('price')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="series">Serie</label>
                    <input class="form-control @error('series') is-invalid @enderror" type="text" name="series" id="series" value="{{old('series')}}">
                    @error('series')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sale_date">Data d'uscita</label>
                    <input class="form-control @error('sale_date') is-invalid @enderror" type="date" name="sale_date" id="sale_date" value="{{old('sale_date')}}">
                    @error('sale_date')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="type">Tipo</label>
                    <input class="form-control @error('type') is-invalid @enderror" type="text" name="type" id="type" value="{{old('type')}}">
                    @error('type')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="artists">Artisti</label>
                    <textarea class="form-control @error('artists') is-invalid @enderror" type="text" name="artists" id="artists">{{old('artists')}}</textarea>
                    @error('artists')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="writers">Scrittori</label>
                    <textarea class="form-control @error('writers') is-invalid @enderror" type="text" name="writers" id="writers">{{old('writers')}}</textarea>
                    @error('writers')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <button  class="btn btn-primary mb-3" type="submit">Aggiungi</button>
            </form>
        </div>
    </main>
@endsection