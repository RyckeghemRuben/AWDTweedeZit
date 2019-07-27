<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function getIndex(){
        $item = new Item();
        $items = $item->getItems();

        return view('welcome',['items'=>$items]);
    }

    public function postCreateItem(Request $request){

        $this->validate($request,[
            'title' => 'required|max:20',
            'content' => 'required|min:10'
        ]);

        $item = new Item([
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);

        $item->save();

        return redirect()->route('home');
    }
}
