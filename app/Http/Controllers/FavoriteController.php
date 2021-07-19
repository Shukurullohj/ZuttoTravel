<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Favorite;

class FavoriteController extends Controller
{
     public function store(Comment $comment)
    {
        return $comment->favorite();

        return back();
    }
    public function destroy(Comment $comment)
    {
        $comment->unfavorite();
    }
}
