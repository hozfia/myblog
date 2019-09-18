<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$O2Zk256DTBCW.UZS7bkOk.e//dfKSs9h7ZWu.kh61oSP01rHZmIm.',
                'remember_token' => null,
                'created_at'     => '2019-09-18 11:09:08',
                'updated_at'     => '2019-09-18 11:09:08',
            ],
        ];

        User::insert($users);
    }
}
