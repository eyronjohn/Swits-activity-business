<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create first user if doesn't exist
        $user1 = User::firstOrCreate(
            ['email' => 'admin01@sabonexpress.ph'],
            [
                'roles_id' => 1,
                'name' => 'Ian Kenneth Mendoza',
                'password' => Hash::make('password')
            ]
        );

        // Create user detail only if it doesn't exist
        if (!$user1->userDetail) {
            $user1->userDetail()->create([
                'firstname' => 'Ian Kenneth',
                'lastname' => 'Mendoza'
            ]);
        }

        // Create second user if doesn't exist
        $user2 = User::firstOrCreate(
            ['email' => 'admin02@sabonexpress.ph'],
            [
                'roles_id' => 1,
                'name' => 'JC Basilio',
                'password' => Hash::make('password')
            ]
        );

        // Create user detail only if it doesn't exist
        if (!$user2->userDetail) {
            $user2->userDetail()->create([
                'firstname' => 'JC',
                'lastname' => 'Basilio'
            ]);
        }
    }
}