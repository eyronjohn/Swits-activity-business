<?php
// database/seeders/OrdersSeeder.php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    public function run(): void
    {
        $user1 = User::first();
        $user2 = User::find(2) ?? User::first();

        $orders = [
            ['user_id' => $user1->id, 'total_amount' => 850.00, 'status' => 'completed'],
            ['user_id' => $user1->id, 'total_amount' => 1200.00, 'status' => 'pending'],
            ['user_id' => $user2->id, 'total_amount' => 650.00, 'status' => 'completed'],
            ['user_id' => $user2->id, 'total_amount' => 950.00, 'status' => 'cancelled'],
            ['user_id' => $user1->id, 'total_amount' => 1800.00, 'status' => 'shipped'],
            ['user_id' => $user2->id, 'total_amount' => 420.00, 'status' => 'pending'],
            ['user_id' => $user1->id, 'total_amount' => 750.00, 'status' => 'completed'],
            ['user_id' => $user2->id, 'total_amount' => 1350.00, 'status' => 'processing'],
            ['user_id' => $user1->id, 'total_amount' => 580.00, 'status' => 'completed'],
            ['user_id' => $user2->id, 'total_amount' => 2200.00, 'status' => 'pending']
        ];

        foreach ($orders as $order) {
            Order::create($order);
        }
    }
}
