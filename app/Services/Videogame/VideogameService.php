<?php

namespace App\Services\Videogame;

use App\Models\Genre;
use App\Models\Videogame;

/**
 * Class VideogameService.
 */
class VideogameService
{
    public function index()
    {
        $data= Videogame::with('genre')->get();
        return $data;
    }

    public function store($request)
    {
        $genreName = strtolower($request->genre);
        $genero = Genre::whereRaw('LOWER(name) = ?', [$genreName])->first();
        if (!$genero) {
            $genero = Genre::create(['name' => $request->genre]);
        }

        $data= Videogame::create([
            'name' => $request->name,
            'genre_id' => $genero->id
        ]);
        return $data->load('genre');

    }
}
