<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
    $products = [
        ['name' => 'The Last of Us', 'brand' => 'Sony', 'console' => 'Playstation', 'price' => 15.20],
        ['name' => 'Halo Reach', 'brand' => '343 Industries', 'console' => 'Xbox', 'price' => 11.45],
        ['name' => 'Fifa 14', 'brand' => 'EA Sports', 'console' => 'Playstation and Xbox', 'price' => 7.99],
    ];

    foreach($products as $product) {
        Product::create([
            'name' => $product['name'],
            'brand' => $product['brand'],
            'console' => $product['console'],
            'price' => $product['price'],               
                                   
   ]);
}
}
}
