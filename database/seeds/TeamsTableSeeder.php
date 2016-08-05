<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Team::create([
            'name' => 'Tottenham Hotspur',
            'image_id' => 1
        ]);

        App\Team::create([
            'name' => 'Everton',
            'image_id' => 2
    }
}
