<?php

namespace App\Services\Genre;

use App\Models\Genre;

/**
 * Class GenreService.
 */
class GenreService
{
    public function index()
    {
        $data= Genre::get();
        return $data;
    }

    public function store($request)
    {
        $data= Genre::create([
            'name' => $request->name,
        ]);
        return $data;

    }
}
