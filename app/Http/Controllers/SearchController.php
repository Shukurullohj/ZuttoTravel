<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\User;


class SearchController extends Controller
{
    public function show()	
    {
        $search = request('q');

        $places = Place::search($search)->paginate(25); 

        if (request()->expectsJson()) {
        	return $places;
        }

        return view('place.search', [
        	'places' => $places,
        	'userz' => User::all()
        ]);
    }
}
