<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Album;
use App\Models\Genre;

class MainController extends Controller
{

    public function dashboard()
    {
        $countAlbum = Album::count();
        $countGenre = Genre::count();

        return view('admin.dashboard',compact('countAlbum','countGenre'));
    }

}
