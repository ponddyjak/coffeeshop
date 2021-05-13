<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            DB::table('users')->insert([
                'name' => 'Peter Parker',
                'email' => 'Peter@parker.com',
                'password' =>Hash::make('12345')
            ]);
    }
}
