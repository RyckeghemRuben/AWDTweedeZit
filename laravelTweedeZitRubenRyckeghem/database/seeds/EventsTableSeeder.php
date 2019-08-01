<?php

use Illuminate\Database\Seeder;
use App\Event;
use Carbon\Carbon;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $event = new Event([
             'title'=>'Overwatch Toernooi',
             'Content'=>'Schrijf je nu in voor dit toernooi.',
             'plaats' => 'Audi 1',
             'datumTijd' => '2020-05-08 14:30:00',
             'afbeelding' => '/images/overwatch.png',
             'maxAantalDeelnemers' => 50
         ]);
         $event->save();

        $event = new Event([
            'title'=>'VR-Room',
            'Content'=>'Ervaar VR aan de hand van de vele headsets die beschkbaar zijn: HTC Vive Pro, Oculus, Playstation VR,... Van kogels ontwijken in Superhot tot ritmisch dansen met lightsabers in Beatsaber, alles is mogelijk in VR. Come get your mind blown!',
            'plaats' => 'Grote Zaal',
            'datumTijd' => '2019-09-08 20:00:00',
            'afbeelding' => '/images/vr.png',
            'maxAantalDeelnemers' => 25
        ]);
        $event->save();
    }
}
