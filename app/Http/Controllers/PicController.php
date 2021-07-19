<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pic;
class PicController extends Controller
{
    public function carousel(Request $request)
    {
        $data = Pic::get();
        return response()->json($data);
    }
}
