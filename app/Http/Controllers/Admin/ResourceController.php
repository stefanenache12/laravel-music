<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    private static $resources = [
        [
            'id' => 1,
            'name' => 'Risorsa 1',
            'slug' => 'risorsa-1',
            'description' => 'Lorem ipsum dolor sit amet',
            'active' => true,
        ],
        [
            'id' => 2,
            'name' => 'Risorsa 2',
            'slug' => 'risorsa-2',
            'description' => 'Lorem ipsum dolor sit amet',
            'active' => false,
        ],
        [
            'id' => 3,
            'name' => 'Risorsa 3',
            'slug' => 'risorsa-3',
            'description' => 'Lorem ipsum dolor sit amet',
            'active' => true,
        ]
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resources = self::$resources;

        return view('admin.resources.index', compact('resources'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.resources.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        // $album = Album::where('slug', $slug)->firstOrFail();

        $resource = null;
        foreach (self::$resources as $singleResource) {
            if ($singleResource['slug'] == $slug) {
                $resource = $singleResource;
            }
        }

        if (!$resource) {
            abort(404);
        }

        return view('admin.resources.show', compact('resource'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        // $album = Album::where('slug', $slug)->firstOrFail();

        $resource = null;
        foreach (self::$resources as $singleResource) {
            if ($singleResource['slug'] == $slug) {
                $resource = $singleResource;
            }
        }

        if (!$resource) {
            abort(404);
        }

        return view('admin.resources.edit', compact('resource'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        // $album = Album::where('slug', $slug)->firstOrFail();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        // $album = Album::where('slug', $slug)->firstOrFail();
    }
}
