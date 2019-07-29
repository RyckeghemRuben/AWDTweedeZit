<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;
use test\Mockery\Adapter\Phpunit\MockeryPHPUnitIntegrationTest;

class AdminController extends Controller
{
    public function getEdit($id){
        $item = Item::find($id);
        return view('admin.edit',['item' => $item]);
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
        $item->delete();

        return redirect()->action('AdminController@getIndex');
    }
}
