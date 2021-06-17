<?php

namespace App\Http\Controllers;

use App\Perfecture;
use Illuminate\Http\Request;

class PerfectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfectures = Perfecture::latest()->get();

        return view('perfectures', compact('perfectures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perfecture  $perfecture
     * @return \Illuminate\Http\Response
     */
    public function show(Perfecture $perfecture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perfecture  $perfecture
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfecture $perfecture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perfecture  $perfecture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfecture $perfecture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perfecture  $perfecture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfecture $perfecture)
    {
        //
    }
}
