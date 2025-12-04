<?php
// database/seeders/OrderItemsSeeder.php

namespace Database\Seeders;

use App\Models\OrderItem;
use Illuminate\Database\Seeder;

class OrderItemsSeeder extends Seeder
{
    public function run(): void
    {
        $orderItems = [
            ['order_id' => 1, 'product_id' => 1, 'quantity' => 3, 'price' => 150.00],
            ['order_id' => 1, 'product_id' => 6, 'quantity' => 5, 'price' => 80.00],
            ['order_id' => 2, 'product_id' => 10, 'quantity' => 4, 'price' => 220.00],
            ['order_id' => 2, 'product_id' => 3, 'quantity' => 2, 'price' => 180.00],
            ['order_id' => 3, 'product_id' => 5, 'quantity' => 2, 'price' => 130.00],
            ['order_id' => 3, 'product_id' => 7, 'quantity' => 8, 'price' => 45.00],
            ['order_id' => 4, 'product_id' => 2, 'quantity' => 4, 'price' => 120.00],
            ['order_id' => 4, 'product_id' => 9, 'quantity' => 3, 'price' => 120.00],
            ['order_id' => 5, 'product_id' => 4, 'quantity' => 5, 'price' => 200.00],
            ['order_id' => 5, 'product_id' => 8, 'quantity' => 2, 'price' => 250.00]
        ];

        foreach ($orderItems as $item) {
            OrderItem::create($item);
        }
    }
}
