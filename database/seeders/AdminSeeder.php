<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class AdminSeeder extends Seeder
{
    
    public function run()
    {
        //DB::table('professions')->truncate();
        DB::table('users')->insert([
            'name' => 'Sayuri Custodio',
            
            'email' => 'sayuriC@movie.com',
            //'email_verified_at' => '',
            'password' => bcrypt('sayuri123'),  
        ]);
        DB::table('users')->insert([
            'name' => 'Miguel Mondoñedo',
            'email' => 'miguelM@movie.com',
            //'email_verified_at' => '',
            'password' => bcrypt('miguel123'),  
        ]);
    }
}