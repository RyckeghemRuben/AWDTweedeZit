<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function getItems(){

    return $this->createDummyData();

    }

    public function createDummyData(){
        $items = [
            ['id'=>1,'title' => 'Boardgames', 'content' => 'Leuke boardgames enzo'],
            ['id'=>2,'title' => 'Gitaar', 'content' => 'Mooie gitaar van Gibson'],
            ['id'=>3,'title' => 'Voetbal Nike', 'content' => 'Rode voetbal van Nike']
        ];
        return $items;
    }
}
