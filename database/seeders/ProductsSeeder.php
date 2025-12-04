<?php
// database/seeders/ProductsSeeder.php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['Chocolate Chip Cookies', 'Crispy edges with soft center, premium chocolate chunks', 150.00, 'https://images.unsplash.com/photo-1577968897966-7d3c5e2c0f46?w=400'],
            ['Oatmeal Raisin Cookies', 'Chewy oatmeal cookies with sweet raisins', 120.00, 'https://images.unsplash.com/photo-1606890658317-7d14490b76fd?w=400'],
            ['Matcha Green Tea Cookies', 'Delicate matcha flavor with subtle sweetness', 180.00, 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=400'],
            ['Red Velvet Cookies', 'Soft red velvet with cream cheese filling', 200.00, 'https://images.unsplash.com/photo-1615484471828-9f2f9761d0d4?w=400'],
            ['Peanut Butter Cookies', 'Classic crunchy peanut butter cookies', 130.00, 'https://images.unsplash.com/photo-1579373590356-8a512b1b6e5e?w=400'],
            ['Traditional Baguette', 'Freshly baked crusty French baguette', 80.00, 'https://images.unsplash.com/photo-1558642452-4ecc8d711a7c?w=400'],
            ['Pandesal', 'Soft Filipino sweet bread rolls', 45.00, 'https://images.unsplash.com/photo-1621996346565-e3dbc353d2e5?w=400'],
            ['Brioche Loaf', 'Rich buttery French bread', 250.00, 'https://images.unsplash.com/photo-1588717757636-9b126d54b9dd?w=400'],
            ['Garlic Bread', 'Fresh bread with garlic butter spread', 120.00, 'https://images.unsplash.com/photo-1621996346565-e3dbc353d2e5?w=400'],
            ['Cinnamon Rolls', 'Soft rolls with cream cheese icing', 220.00, 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=400']
        ];

        foreach ($products as $product) {
            Product::create([
                'name' => $product[0],
                'description' => $product[1],
                'price' => $product[2],
                'image' => $product[3]
            ]);
        }
    }
}
