<?php

use Illuminate\Database\Seeder;

class LookbookDesignersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        factory(App\LookbookDesigner::class, 50)->create();
    }
}
