<?php

namespace App\Http\Controllers\Admin;

use App\Models\Album;
use App\Http\Requests\StoreAlbumRequest;
use App\Http\Requests\UpdateAlbumRequest;
use App\Http\Controllers\Controller;

use App\Models\Genre;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::all();

        return view('admin.albums.index',compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        return view ('admin.albums.create',compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlbumRequest $request)
    {

        $formData = $request->all();

       

        $album = new Album();

        $album -> title = $formData['title'];
        $album -> year = $formData['year'];
        $album -> description = $formData['description'];
        $album -> country = $formData['country'];
        $album -> genre_id = $formData['genre_id'];

        $album->save();

        return redirect()->route('admin.albums.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        

        return view('admin.albums.show',compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        $genres = Genre::all();
        return view('admin.albums.edit',compact('album','genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlbumRequest $request, Album $album)
    {
        $formData = $request->all();

        $album -> title = $formData['title'];
        $album -> year = $formData['year'];
        $album -> description = $formData['description'];
        $album -> country = $formData['country'];
        $album -> genre_id = $formData['genre_id'];

        $album->save();

        return redirect()->route('admin.albums.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
       
        $album -> delete();

        return redirect()->route('admin.albums.index');
    }
}
