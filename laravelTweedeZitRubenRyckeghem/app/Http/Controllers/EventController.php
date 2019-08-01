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
        $deelnemers = Deelnemer::where('user_id', '=', Auth::id())->value('id');
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

    public function getUitschrijvenEventDeelnemer($id){
      $deelnemer = Deelnemer::find($id);
      $deelnemer->delete();

      return redirect()->action('EventController@getIndex');
    }

    public function postCreateEvent(Request $request){
        $this->validate($request,[
            'title' => 'required|max:50',
            'content' => 'required|min:10'
        ]);
        $event = new Event([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'plaats' =>$request->input('plaats'),
            'datumTijd' => $request->input('datumTijd'),
            'afbeelding' => $request->input('afbeelding'),
            'spreker' => $request->input('spreker'),
            'maxAantalDeelnemers' => $request->input('maxAantalDeelnemers')

        ]);

        $event->save();

        return redirect()->route('admin.index');
    }
    public function postUpdateEvent(Request $request){

        $this->validate($request,[
            'title' => 'required|max:50',
            'content' => 'required|min:10',
            'plaats' => 'required',
            'datumTijd' => 'required',
            'afbeelding' => 'required',
            'spreker'=>'required',
            'maxAantalDeelnemers' => 'required'
        ]);

        //haal aan te passen item op uit database
        $event = Event::find($request->input('id'));

        //pas waarden aan
        $event->title =$request->input('title');
        $event->content=$request->input('content');
        $event->plaats =$request->input('plaats');
        $event->datumTijd=$request->input('datumTijd');
        $event->afbeelding =$request->input('afbeelding');
        $event->spreker=$request->input('spreker');
        $event->maxAantalDeelnemers=$request->input('maxAantalDeelnemers');

        $event->save();


        //tags opslaan
        $event->tags()->sync(
            $request->input('tags')===null ? '' : $request->input('tags'));

        return redirect()->route('admin.index');
    }


}
