<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id'         => 1,
                'title'      => 'Admin',
                'created_at' => '2019-09-18 11:09:08',
                'updated_at' => '2019-09-18 11:09:08',
            ],
            [
                'id'         => 2,
                'title'      => 'User',
                'created_at' => '2019-09-18 11:09:08',
                'updated_at' => '2019-09-18 11:09:08',
            ],
        ];

        Role::insert($roles);
    }
}
