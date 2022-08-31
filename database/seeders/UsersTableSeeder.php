<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for($i=1;$i<25000;$i++){
        DB::table('users')->insert([
            'name' => 'Ahsan Arafat',
            'email' => 'oytizo'.$i.'.bd@gmail.com',
            'password' => Hash::make('12345')
        ]);
       }
    }
}
