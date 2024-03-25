<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\OrderLine;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $products = Product::factory(10)->create();

        Order::factory(20)->create()->each(function ($order) use ($products) {
            $numOrderLines = rand(1, 3);

            for ($i = 0; $i < $numOrderLines; $i++) {
                $product = $products->random();

                $existingOrderLine = OrderLine::where('order_id', $order->id)
                    ->where('product_id', $product->id)
                    ->exists();

                if (!$existingOrderLine) {
                    OrderLine::factory()->create([
                        'order_id' => $order->id,
                        'qty' => rand(1, 10),
                        'product_id' => $product->id,
                    ]);
                }
            }
        });
    }
}