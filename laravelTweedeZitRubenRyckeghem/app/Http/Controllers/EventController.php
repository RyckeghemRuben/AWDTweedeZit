<?php

namespace App\Http\Controllers;

use App\Deelnemer;
use Illuminate\Http\Request;
use App\Event;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
 public function getIndex(){
        $events = Event::orderBy('created_at','desc')->with('deelnemers')->get();
        $deelnemers = Deelnemer::all();
        //haal enkel de values op van event_id van de deelnemer (met ->pluck())
        $deelnemer = DB::table('deelnemers')->select('event_id')->where('user_id', '=', Auth::id())->pluck('event_id');
        return view('other.event',['events'=>$events,'deelnemers'=>$deelnemers,'deelnemer'=>$deelnemer]);
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
