<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
 public function getIndex(){
        $events = Event::orderBy('created_at','desc')->get();
        return view('other.event',['events'=>$events]);
 }
}
