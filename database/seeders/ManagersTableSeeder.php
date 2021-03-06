<?php

namespace Database\Seeders;

use App\Models\Manager;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $managers = [
            [
                'clubs_id'      => 1,
                'photo'         => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man39237.png',
                'name'          => 'Thomas Tuchel',
                'age'           => '47',
                'nationality'   => 'Germany',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'      => 2,
                'photo'         => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man51018.png',
                'name'          => 'Mikel Arteta',
                'age'           => '38',
                'nationality'   => 'Spain',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'      => 3,
                'photo'         => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man40342.png',
                'name'          => 'Ole Gunnar Solskjær',
                'age'           => '48',
                'nationality'   => 'Norway',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'      => 4,
                'photo'         => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man37974.png',
                'name'          => 'Josep Guardiola',
                'age'           => '50',
                'nationality'   => 'Spain',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'      => 5,
                'photo'         => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man279.png',
                'name'          => 'Jurgen Klopp',
                'age'           => '53',
                'nationality'   => 'Germany',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'      => 6,
                'photo'         => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man134.png',
                'name'          => 'Jose Mourinho',
                'age'           => '58',
                'nationality'   => 'Portugal',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
        ];

        Manager::insert($managers);
    }
}
