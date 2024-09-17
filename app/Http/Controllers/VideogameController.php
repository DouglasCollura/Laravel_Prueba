<?php

namespace App\Http\Controllers;

use App\Http\Requests\Videogame\VideogameRequest;
use App\Models\Videogame;
use App\Services\Videogame\VideogameService;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(VideogameService $videogameService)
    {
        return $videogameService->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VideogameRequest $request, VideogameService $videogameService)
    {
        $data = $videogameService->store($request);
        return $data;
    }

    /**
     * Display the specified resource.
     */
    public function show(Videogame $videogame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Videogame $videogame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Videogame $videogame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videogame $videogame)
    {
        //
    }
}
