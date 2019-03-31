<?php

use Illuminate\Database\Seeder;

class todoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\todo::class , 7)->create();
    }
}
