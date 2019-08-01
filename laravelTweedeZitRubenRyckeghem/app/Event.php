<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Event extends Model
{
    protected $fillable = ['title','content','plaats','datumTijd','afbeelding','spreker','maxAantalDeelnemers'];

    public function deelnemers(){
        return $this->hasMany('App\Deelnemer');
    }


    public function tags(){
        return $this->belongsToMany('App\Tag','event_tag','event_id','tag_id')
            ->withTimestamps();
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtolower($value);
    }

    public function getTitleAttribute($value){
        return ucfirst(trans($value));
    }


}
