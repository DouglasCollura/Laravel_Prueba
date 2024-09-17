<?php

namespace App\Services\Film;

use App\Models\Film;
use App\Models\Genre;

/**
 * Class FilmService.
 */
class FilmService
{
    public function index()
    {
        $data= Film::with('genre')->get();
        return $data;
    }

    public function store($request)
    {

        $genreName = strtolower($request->genre);
        $genero = Genre::whereRaw('LOWER(name) = ?', [$genreName])->first();
        if (!$genero) {
            $genero = Genre::create(['name' => $request->genre]);
        }

        $data= Film::create([
            'name' => $request->name,
            'genre_id' => $genero->id
        ]);
        return $data->load('genre');

    }
}
