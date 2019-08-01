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
        $tag = new Tag(['name' => 'Gaming']);
        $tag->save();

        $tag = new Tag(['name' => 'General']);
        $tag->save();

        $tag = new Tag(['name' => 'Programming']);
        $tag->save();

        $tag = new Tag(['name' => 'Workshop']);
        $tag->save();
    }
}
