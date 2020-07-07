<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 1st user in application
        DB::table('users')->updateOrInsert([
        	'name' => 'Super Admin',
        	'email' => 'suadmin@project.com',
        	'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => Hash::make('12345678'),
        	'remember_token' => null,
        	'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
