<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
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
        User::create([
            'name' => 'Sergen',
            'surname' => 'Temel',
            'email' => 'tmlsergen@gmail.com',
            'phone' => '5054702896',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'Nihat',
            'surname' => 'Avcı',
            'email' => 'nihatavci91@gmail.com',
            'phone' => '5330411640',
            'password' => bcrypt('12345678'),
        ]);

        Category::create([
            'id' => 1,
            'name' => 'Erkek',
            'short' => 'erkek',
        ]);

        Category::create([
            'id' => 2,
            'name' => 'Kadın',
            'short' => 'kadin',
        ]);

        Category::create([
            'id' => 3,
            'name' => 'Çocuk',
            'short' => 'cocuk',
        ]);

        Product::create([
            'id' => 1,
            'name' => 'Erkek Hırka',
            'category_id' => 1,
            'order' => 1,
            'status' => 'active'
        ]);

        Product::create([
            'id' => 2,
            'name' => 'Erkek Pantalon',
            'category_id' => 1,
            'order' => 2,
            'status' => 'active'
        ]);

        Product::create([
            'id' => 3,
            'name' => 'Erkek Hodiee',
            'category_id' => 1,
            'order' => 3,
            'status' => 'active'
        ]);

        Product::create([
            'id' => 4,
            'name' => 'Kadın Hodiee',
            'category_id' => 2,
            'order' => 1,
            'status' => 'active'
        ]);

        Product::create([
            'id' => 5,
            'name' => 'Kadın Eşofman',
            'category_id' => 2,
            'order' => 2,
            'status' => 'active'
        ]);

        ProductImage::create([
            'product_id' => 1,
            'image' => 'erkek-hirka-1.jpeg'
        ]);

        ProductImage::create([
            'product_id' => 1,
            'image' => 'erkek-hirka-2.jpeg'
        ]);

        ProductImage::create([
            'product_id' => 1,
            'image' => 'erkek-hirka-3.jpeg'
        ]);

        ProductImage::create([
            'product_id' => 2,
            'image' => 'erkek-pantalon-1.jpg'
        ]);

        ProductImage::create([
            'product_id' => 2,
            'image' => 'erkek-pantalon-2.jpg'
        ]);

        ProductImage::create([
            'product_id' => 3,
            'image' => 'erkek-hodiee-1.jpg'
        ]);

        ProductImage::create([
            'product_id' => 3,
            'image' => 'erkek-hodiee-2.jpg'
        ]);

        ProductImage::create([
            'product_id' => 3,
            'image' => 'erkek-hodiee-3.jpg'
        ]);

        ProductImage::create([
            'product_id' => 4,
            'image' => 'kadin-hodiee-1.jpg'
        ]);

        ProductImage::create([
            'product_id' => 4,
            'image' => 'kadin-hodiee-2.jpg'
        ]);

        ProductImage::create([
            'product_id' => 4,
            'image' => 'kadin-hodiee-3.jpg'
        ]);

        ProductImage::create([
            'product_id' => 4,
            'image' => 'kadin-hodiee-4.jpg'
        ]);

        ProductImage::create([
            'product_id' => 5,
            'image' => 'kadin-esofman-1.jpg'
        ]);

        ProductImage::create([
            'product_id' => 5,
            'image' => 'kadin-esofman-2.jpg'
        ]);

        ProductImage::create([
            'product_id' => 5,
            'image' => 'kadin-esofman-3.jpg'
        ]);
    }
}
