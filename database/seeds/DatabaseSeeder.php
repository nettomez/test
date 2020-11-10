<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->truncateTablas([
            'roll',
            'permiso'
            
         ]);
         // $this->call(UsersTableSeeder::class);
         $this->call(TablaRollSeeder::class);
         $this->call(TablaPermisoSeeder::class);
    }

    protected function truncateTablas(array $tablas)
    {
        
    }
}
