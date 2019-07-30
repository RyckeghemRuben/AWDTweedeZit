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
             'datumTijd' => '2019-09-15 14:30:00'
         ]);
         $event->save();
    }
}
