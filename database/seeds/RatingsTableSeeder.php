<?php

use Illuminate\Database\Seeder;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 22; $i++) {
            App\Rating::create([
                'player_id' => $i,
                'game_id' => $i
            ]);
        }
    }
}
