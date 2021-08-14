<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;

        $user->username = 'McPerry';
        $user->lastname = 'Co';
        $user->firstname = 'MacK Perry';
        $user->middlename = 'Lapastora';
        $user->password = Hash::make('1234');

        $user->save();
    }
}
