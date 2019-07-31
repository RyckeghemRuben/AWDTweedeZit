<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Event extends Model
{
    protected $fillable = ['title','content','plaats','datumTijd','afbeelding'];

    public function deelnemers(){
        return $this->hasMany('App\Deelnemer');
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtolower($value);
    }

    public function getTitleAttribute($value){
        return ucfirst(trans($value));
    }


}
