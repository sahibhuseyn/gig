<?php

use Illuminate\Database\Seeder;

class ProjectSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'name' => 'british academy',
            'url' => 'britishacademy.az',
            'image' => '1.png'
        ]);
    }
}
