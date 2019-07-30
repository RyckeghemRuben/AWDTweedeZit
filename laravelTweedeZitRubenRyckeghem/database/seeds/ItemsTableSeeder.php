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
            'title' => 'EhackB = ready',
            'content' => 'Wij zijn klaar voor de volgende EhackB. Hou onze website in de gaten voor meer informatie.'

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
