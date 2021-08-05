<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Perfecture;
use App\Comment;
use App\RecordActivity;
use Laravel\Scout\Searchable;

class Place extends Model
{
    use RecordActivity, Searchable;

    protected $guarded = [];
    public function perfecture()
    {
        return $this->belongsTo(Perfecture::class);
    }
    public function path()
    {
       return "/places/{$this->perfecture->name}/{$this->id}";
    }
    public function comments()
    {
      return $this->hasMany(Comment::class);
    }
    public function addComments($comment)
    {
        return $this->comments()->create($comment);
    }
    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    protected function makeAllSearchableUsing($query)
    {
        return $query->with('creator')
        ->with('perfecture');
    }

}
