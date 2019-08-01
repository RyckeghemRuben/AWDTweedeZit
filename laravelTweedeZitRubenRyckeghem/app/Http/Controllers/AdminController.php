<?php

namespace App\Http\Controllers;

use App\Item;
use App\Tag;
use App\Event;

use Illuminate\Http\Request;
use test\Mockery\Adapter\Phpunit\MockeryPHPUnitIntegrationTest;

class AdminController extends Controller
{
    public function getEdit($id){
        $item = Item::find($id);
        $tags = Tag::all();

        return view('admin.edit',[
            'item' => $item,
            'itemId' => $id,
            'tags' => $tags
        ]);
    }
    public function getCreate(){
        return view('admin.create');

    }


    public function getIndex(){
        $items = Item::orderBy('created_at','desc')->get();
        $events = Event::orderBy('created_at','desc')->get();

        return view('admin.index',['items'=>$items,'events'=>$events]);
    }
    public function getDelete($id){
        $item = Item::find($id);
        $item->likes()->delete();
        $item->tags()->detach();
        $item->delete();

        return redirect()->action('AdminController@getIndex');
    }

    public function getEventCreate(){
        return view('admin.eventCreate');
    }

    public function getEventEdit($id){
        $event = Event::find($id);
        $tags = Tag::all();

        return view('admin.eventEdit',[
            'event' => $event,
            'eventId' => $id,
            'tags' => $tags
        ]);
    }
    public function getEventDelete($id){
        $event = Event::find($id);
        $event->deelnemers()->delete();
        $event->tags()->detach();
        $event->delete();

        return redirect()->action('AdminController@getIndex');
    }

}
