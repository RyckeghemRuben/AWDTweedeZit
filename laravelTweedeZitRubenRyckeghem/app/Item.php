<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['title','content'];

    public function likes(){
        return $this->hasMany('App\Like');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag',
            'item_tag','item_id',
            'tag_id')->withTimestamps();

    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtolower($value);
    }

    public function getTitleAttribute($value){
        return ucfirst(trans($value));
    }
}
