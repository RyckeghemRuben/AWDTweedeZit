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
            'title' => 'Upcoming announcements',
            'content' => 'Binnen enkele ogenblikken zullen de eerste events aangekondigd worden. Stay tuned!'

        ]);
        $item->save();

        $item = new Item([
            'title' => 'Do you love overwatch?',
            'content' => 'Ben jij fan van de game Overwatch? Wil je graag je skills op de proef stellen? Doe dan zeker mee met ons toernooi! Schrijf je in op de eventpagina.'

        ]);
        $item->save();

        $item = new Item([
            'title' => 'Thank you',
            'content' => 'We willen iedere sponsor graag bedanken die dit evenement mogelijk maken. Zonder jullie zouden we zo\'n geweldig event nooit kunnen realiseren.'

        ]);
        $item->save();

    }

}
