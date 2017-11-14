<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = ['title', 'meta_description','keywords','content','published_at','user_id'];

    public function author()
    {
        return $this->belongsTo('App\User');
    }
}
