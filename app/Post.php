<?php

namespace App;
use Carbon\Carbon;

class Post extends Model
{
    // protected $fillable = ['title', 'body']; // Use fillable proprty as a white list.
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {
    	$user_id= auth()->id();
        $this->comments()->create(compact('body','user_id'));
    }

    public function scopeFilter($query, $filters)
    {
        if ($month = $filters['month']) 
        {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = $filters['year'])
        {
            $query->whereYear('created_at', $year);
        }

    }

    public static function archives()
    {
        return static::selectRaw('year(created_at) as year, monthname(created_at) as month, count(*) as Published')
        ->groupBy('year','month')
        ->get()
        ->toArray();
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
