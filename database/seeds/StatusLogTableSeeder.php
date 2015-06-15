<?php

use Illuminate\Database\Seeder;

class StatusLogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\StatusLog', 50)->create();
    }
}
