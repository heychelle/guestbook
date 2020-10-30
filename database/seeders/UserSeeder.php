<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Michelle ad';
        $user->email='michelle.admin@gmail.com';
        $user->password='$2y$10$TkmBFHVK/uFMBsfe5tykN.951hxFzfXaNX0zIi6Wcfl//HI.ubXLu';
        $user->role_id='1';
        //admin
        $user->save();

        $user = new User();
        $user->name = 'Michelle ad';
        $user->email='michelle.creator@gmail.com';
        $user->password='$2y$10$TkmBFHVK/uFMBsfe5tykN.951hxFzfXaNX0zIi6Wcfl//HI.ubXLu';
        $user->role_id='2';
        //creator
        $user->save();

        $user = new User();
        $user->name = 'Michelle ad';
        $user->email='michelle.user@gmail.com';
        $user->password='$2y$10$TkmBFHVK/uFMBsfe5tykN.951hxFzfXaNX0zIi6Wcfl//HI.ubXLu';
        $user->role_id='3';
        //user
        $user->save();
    }
}
