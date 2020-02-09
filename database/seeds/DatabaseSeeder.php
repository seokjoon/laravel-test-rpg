<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if(config('database.default') !== 'sqlite') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
        }

        // $this->call(UsersTableSeeder::class);

        \App\Models\Player\Player::truncate();
        $this->call(PlayersTableSeeder::class);

        \App\Models\Client\Client::truncate();
        $this->call(ClientsTableSeeder::class);

        \App\Models\Client\ClientPlayer::truncate();
        $this->call(ClientPlayerTableSeeder::class);

        \App\Models\Quest\Quest::truncate();
        $this->call(QuestsTableSeeder::class);

        if(config('database.default') !== 'sqlite') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
        }
    }
}
