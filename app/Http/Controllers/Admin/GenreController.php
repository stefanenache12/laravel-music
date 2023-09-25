<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\StoreGenreRequest;
use App\Http\Requests\UpdateGenreRequest;
use App\Http\Controllers\Controller;

// Models
use App\Models\Genre;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::all();

        return view('admin.genres.index',compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.genres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGenreRequest $request)
    {
        $formData = $request->all();

        $genre = new Genre();

        $genre -> name = $formData['name'];
        $genre -> slug = $genre->name;
        $genre->save();

        return redirect()->route('admin.genres.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        $genre = Genre::findOrFail($genre);

        return view('admin.genres.show',compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        $genre = Genre::findOrFail($genre);

        return view('admin.genres.edit',compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGenreRequest $request, Genre $genre)
    {
        $formData = $request->all();
        $genre -> name = $formData['name'];
        $genre -> slug = $genre->name;
        $genre->save();

        return redirect()->route('admin.genres.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        $genre = Genre::findOrFail($genre);
        $genre -> delete();

        return redirect()-> route('admin.genres.index');
    }
}
