<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.comics.index', ['comics' => Comic::orderByDesc('id')->paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $data = $request->all();

        $valid_data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|max:65535',
            'price' => 'required',
            'category' => 'nullable|max:30'
        ]);

        // $comic = new Comic();

        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->price = $data['price'];
        // $comic->category = $data['category'];

        // $comic->save();

        Comic::create($valid_data);

        return to_route('admin.comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        // dd(Comic::find($comic));

        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {

        // $data = $request->all();

        $valid_data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|max:65535',
            'price' => 'required',
            'category' => 'nullable|max:30'
        ]);

        $comic->update($valid_data);

        return to_route('admin.comics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        // dd($comic);

        $comic->delete();

        return to_route('admin.comics.index');
    }
}
