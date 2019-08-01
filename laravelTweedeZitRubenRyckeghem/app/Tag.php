<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $fillable = ['name'];

    public function items(){
        return $this->belongsToMany('App\Item',
            'item_tag','tag_id',
            'item_id')->withTimestamps();
    }

    public function events(){
        return $this->belongsToMany('App\Event','event_tag','tag_id','event_id')
            ->withTimestamps();
    }
}
