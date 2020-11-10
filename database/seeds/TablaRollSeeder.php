<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaRollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rolls = [
           'administrador',
           'editor',
           'supervisor',
        ];
        foreach($rolls as $key => $value){
            DB::table('roll')->insert([
                'nombre' => $value,
                'created_at'=> Carbon::now()->format('y-m-d H:i:s')
            ]);
        }
       
    }
    
}
