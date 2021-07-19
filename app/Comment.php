<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Favorite;


class Comment extends Model
{

    use RecordActivity;

    protected $appends = ['favoritesCount', 'isFavorited'];
    protected $guarded = [];
     public function owner()
     {
        return $this->belongsTo(User::class, 'user_id');
     }
    public function favorites()
     {
        return $this->morphMany(Favorite::class, 'favorited');
     }

    public function favorite()
    {
    	$attr = ['user_id'=>auth()->id()];
        if(! $this->favorites()->where($attr)->exists()){
        	$this->favorites()->create($attr); 
        }
    }
    public function unfavorite()
    {
        $attr = ['user_id'=>auth()->id()];
        $this->favorites()->where($attr)->delete();
    }
    public function getisFavoritedAttribute()
    {
        return $this->isFavorited();
    }
    public function isFavorited() 
    {
    	return $this->favorites()->where('user_id', auth()->id())->exists();
    }

    public function getFavoritesCountAttribute()    
    {
        return $this->favorites->count();
    }

}
