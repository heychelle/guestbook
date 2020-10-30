<?php

namespace Database\Seeders;

use Highlight\Mode;
use Illuminate\Database\Eloquent\Model;
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
        //10 adalah jumalh yg bisa km buat
//        \App\Models\User::factory(10)->create();
        Model::unguard();
        $this->call([
           UserSeeder::class,
            RoleSeeder::class,
        ]);
    Model::reguard();
    }
}
