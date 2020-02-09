<?php

use Illuminate\Database\Seeder;

class ClientPlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Client\ClientPlayer::class, 30)->create();
    }
}
