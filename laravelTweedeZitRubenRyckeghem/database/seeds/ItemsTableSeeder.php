<?php

use Illuminate\Database\Seeder;
use App\Item;


class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Item([
            'title' => 'Boardgames',
            'content' => 'Ganzenbord'
        ]);
        $item->save();

        $item = new Item([
            'title' => 'Voetbal',
            'content' => 'Rode voetbal van Nike; Maat 5'
        ]);
        $item->save();

        $item = new Item([
            'title' => 'Gitaar',
            'content' => 'Gitaar Gibson linkshandig'
        ]);
        $item->save();
    }

}
