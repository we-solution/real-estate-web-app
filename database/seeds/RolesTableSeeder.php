<?php

use Illuminate\Database\Seeder;

use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(
            [
                'name' => 'Admin',
                'desc' => 'admin',
                'status' => '1'
            ],
            [
                'name' => 'User',
                'desc' => 'user',
                'status' => '1'
            ],
            [
                'name' => 'DBA',
                'desc' => 'dba',
                'status' => '1'
            ]);
    }
}
