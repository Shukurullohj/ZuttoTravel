<?php

namespace App\Http\Controllers;

use App\Place;
use App\Perfecture;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Perfecture $perfecture)
    {
        if ($perfecture->exists){
            $places = $perfecture->places()->latest();
        }else {
            $places = Place::latest();
        }
        if ($username = request('by')) {
            $user = \App\User::where('name', $username)->firstorFail();

            $places->where('user_id', $user->id);
        }
        $places = $places->get();
        return view('place.index', compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('place.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $place = Place::create([
            'name' => request('name'),
            'body' => request('body'),
            'price' => request('price'),
            'perfecture_id' =>request('perfecture_id'),
            'user_id' => auth()->id()
        ]);
        return redirect($place->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show($perfecture, Place $place)
    {
        return view('place.show', compact('place'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        //
    }
}
