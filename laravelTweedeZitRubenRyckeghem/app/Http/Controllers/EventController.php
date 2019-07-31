<?php

namespace App\Http\Controllers;

use App\Deelnemer;
use Illuminate\Http\Request;
use App\Event;
use App\User;

class EventController extends Controller
{
 public function getIndex(){
        $events = Event::orderBy('created_at','desc')->with('deelnemers')->get();
        $deelnemer = Deelnemer::where('user_id', auth()->user()->id)->first();
        return view('other.event',['events'=>$events, 'deelnemer'=>$deelnemer]);
 }

    public function getInschrijvenEventDeelnemer($id){
        $event = Event::where('id',$id)->first();
        $user = auth()->user();
        $deelnemer = new Deelnemer();
        $deelnemer->user_id = $user->id;

        $event->deelnemers()->save($deelnemer);

        return redirect()->back();

    }
}
