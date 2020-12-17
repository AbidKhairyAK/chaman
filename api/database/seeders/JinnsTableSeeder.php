<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JinnsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app('db')->table('jinns')->truncate();

        app('db')->table('jinns')->insert([
            'name'    => 'Slamet',
            'faction' => 'Karya',
            'ability' => 'berkarya',
        ]);

        app('db')->table('jinns')->insert([
            'name'    => 'Hyung',
            'faction' => 'Oppa',
            'ability' => 'k-pop',
        ]);
    }
}
