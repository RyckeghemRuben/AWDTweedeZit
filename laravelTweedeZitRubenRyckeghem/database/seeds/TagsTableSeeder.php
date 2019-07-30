<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new Tag(['name' => 'Muziekinstrumenten']);
        $tag->save();

        $tag = new Tag(['name' => 'Games']);
        $tag->save();

        $tag = new Tag(['name' => 'Sportmateriaal']);
        $tag->save();

        $tag = new Tag(['name' => 'Gezelschapsspellen']);
        $tag->save();
    }
}
