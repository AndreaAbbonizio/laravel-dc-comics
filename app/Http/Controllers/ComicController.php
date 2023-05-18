<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics/index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validation($request);

        $formData = $request->all();

        $newComic = new Comic();

        $newComic->fill($formData);

        $newComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics/show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics/edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {

        $this->validation($request);

        $formData = $request->all();


        $comic->update($formData);




        $comic->save();

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }

    private function validation($request)
    {
        $formData = $request->all();

        $validator = Validator::make($formData, [
            'title' => 'required|min:3',
            'description' => 'required|min:10',
            'thumb' => 'required|min:5',
            'price' => 'required|max:7|min:4',
            'series' => 'required|min:2',
            'sale_date' => 'required',
            'type' => 'required|max:30|min:3',
            'artists' => 'required|min:10',
            'writers' => 'required|min:10',
        ], [
            // dobbiamo inserire qui un insieme di messaggi da comunicare all'utente per ogni errore che vogliamo modificare
            'title.required' => 'Il titolo deve essere indicato',
            'title.min' => 'Il titolo non deve essere più corto di 3 caratteri',
            'description.required' => "La descrizione deve essere indicata",
            'description.min' => "La descrizione deve essere più lunga di 10 caratteri",
            'thumb.required' => "Il link dell'immagine deve essere indicato",
            'thumb.min' => "Il link dell'immagine deve essere più lungo  di 5 caratteri",
            'price.required' => "Il prezzo deve essere indicato",
            'price.max' => "Il prezzo non deve essere più lungo di 7 caratteri",
            'price.min' => "Il prezzo deve essere più lungo di 4 caratteri",
            'series.required' => "La serie deve essere indicata",
            'series.min' => "La serie deve essere più lunga di 2 caratteri",
            'sale_date.required' => "La data d'uscita deve essere indicata",
            'type.required' => "Il tipo deve essere indicato",
            'type.max' => "Il tipo non deve essere più lungo di 7 caratteri",
            'type.min' => "Il tipo deve essere più lungo di 4 caratteri",
            'artists.required' => "Gli artisti devono essere indicati",
            'artists.min' => "Gli artisti devono essere più lunghi di 10 caratteri",
            'writers.required' => "Gli scrittori devono essere indicati",
            'writers.min' => "Gli scrittori devono essere più lunghi di 10 caratteri",
        ])->validate();

        return $validator;
    }
}
