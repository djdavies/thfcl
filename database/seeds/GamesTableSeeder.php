<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Game::create([
            'home_team_id' => 1,
            'away_team_id' => 2,
            'league_id' => 1
        ]);
    }
}
