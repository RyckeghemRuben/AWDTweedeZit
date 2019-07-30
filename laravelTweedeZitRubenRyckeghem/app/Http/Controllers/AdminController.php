<?php

namespace App\Http\Controllers;

use App\Item;
use App\Tag;

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
        return view('admin.index',['items'=>$items]);
    }
    public function getDelete($id){
        $item = Item::find($id);
        $item->likes()->delete();
        $item->tags()->detach();
        $item->delete();

        return redirect()->action('AdminController@getIndex');
    }
}
