<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
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
            App\Player::create([
                'name' => $faker->name($gender = 'male', $title = 'null'),
                'position' => $faker->randomElement($array = array ('d','m','f')),
                'team_id' => 1,
                'image_id' => $i
            ]);
        }
    }
}
