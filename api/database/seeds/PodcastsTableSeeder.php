<?php

use Illuminate\Database\Seeder;

class PodcastsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('podcasts')->truncate();
        factory(App\Podcast::class, 3)->create();
    }
}
