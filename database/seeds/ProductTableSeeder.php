<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'طماطم',
            'slug' => 'tomatoes',
            'details' => 'طماطم طبيعية',
            'price' => 249999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);

        Product::create([
            'name' => 'كوسة',
            'slug' => 'zucchini',
            'details' => 'كوسة طبيعية',
            'price' => 15622,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);

        Product::create([
            'name' => 'خيار',
            'slug' => 'cucumber',
            'details' => 'خيار طبيعية',
            'price' => 249999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);

        Product::create([
            'name' => 'فلفل',
            'slug' => 'pepper',
            'details' => 'فلفل طبيعية',
            'price' => 352000,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);

        Product::create([
            'name' => 'جزر',
            'slug' => 'carrots',
            'details' => 'جزر طبيعية',
            'price' => 541200,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);

        Product::create([
            'name' => 'مانجو',
            'slug' => 'mango',
            'details' => 'مانجو طبيعية',
            'price' => 687500,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);

        Product::create([
            'name' => 'فراولة',
            'slug' => 'strawberries',
            'details' => 'فراولة طبيعية',
            'price' => 249999,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);

        Product::create([
            'name' => 'بطيخ',
            'slug' => 'watermelon',
            'details' => 'بطيخ طبيعية',
            'price' => 368700,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);

    }
}