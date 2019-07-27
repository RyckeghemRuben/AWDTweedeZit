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
}
