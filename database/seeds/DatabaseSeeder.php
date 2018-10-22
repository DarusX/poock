<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Category;
use App\Product;
use Faker\Generator;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create([
            'name' => 'Réén Pock',
            'email' => 'poock@poock.com',
            'password' => bcrypt('123456')
        ]);
        factory(Category::class, 5)->create();
        factory(Product::class, 100)->create()->each(function($product){
            for ($i=0; $i < 3; $i++) { 
                $product->categories()->attach(Category::inRandomOrder()->first()->id);
            }
        });
    }
}
