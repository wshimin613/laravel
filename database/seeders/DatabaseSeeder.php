<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Animal;
use App\Models\User;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Schema::disableForeignKeyConstraints();     //取消外鍵約束
        Animal::truncate();                         //清空animals資料表，ID歸零
        User::truncate();                           //清空users資料表，ID歸零
        
        User::factory(5)->create();
        Animal::factory(500)->create();
        Schema::enableForeignKeyConstraints();
    }
}
