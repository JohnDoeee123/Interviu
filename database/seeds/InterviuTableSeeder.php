<?php

use Illuminate\Database\Seeder;

class InterviuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Interviu::class, 5)->create();
    }
}
