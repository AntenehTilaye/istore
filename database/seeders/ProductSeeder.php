<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
            'name' => "Nike Shoes",
            'product_detail' => "White Nike Shoes with blue and pink stripes",
            'picture' => "0kM6tTohr5TxD5HMlRVNIPh02SDSGcYvPMCtrZYq.jpg",
            'category_id' => 1,
            'price' => 120,
            'amount' => 30,
            'store_id' => 1
        ]);
        $product->save();
        $product2 = new Product([
            'name' => "light Pink Dress",
            'product_detail' => "beautiful light Pink Dress which looks great with all skin types",
            'picture' => "0kM6tTohr5TxD5HMlRsdsIPh02JAOGcYvPMCtrZYq.jpg",
            'category_id' => 2,
            'price' => 20,
            'amount' => 50,
            'store_id' => 1
        ]);
        $product2->save();
        $product3 = new Product([
            'name' => "light Purplish Pink Dress",
            'product_detail' => "beautiful light Purplish Pink Dress which looks great with all skin types",
            'picture' => "0kM6tTohr5TxD5HMlRVNIPh02JAOGcYvPMsdsZYq.jpg",
            'category_id' => 2,
            'price' => 20,
            'amount' => 50,
            'store_id' => 1
        ]);
        $product3->save();
        $product4 = new Product([
            'name' => "Blue Black Dress",
            'product_detail' => "beautiful Blue Black Dress which looks great with all skin types",
            'picture' => "0kMwe2ohr5TxD5HMlRVNIPh02JAOGcYvPMCtrZYq.jpg",
            'category_id' => 2,
            'price' => 60,
            'amount' => 20,
            'store_id' => 1
        ]);
        $product4->save();
        $product5 = new Product([
            'name' => "Black Dress",
            'product_detail' => "beautiful Black Dress which looks great with all skin types",
            'picture' => "0kM6tTohr5TxD5HMlRVNIPh02JAOGcYvPMCtrZYq.jpg",
            'category_id' => 2,
            'price' => 30,
            'amount' => 20,
            'store_id' => 1
        ]);
        $product5->save();

        $product6 = new Product([
            'name' => "Black Lexury Watch",
            'product_detail' => "Black Lexury Watch which looks great with all skin types and for both men and women",
            'picture' => "0kM6tTjkladkjoqjkwejklsdJAOGcYvPMCtrZYq.jpg",
            'category_id' => 3,
            'price' => 100,
            'amount' => 20,
            'store_id' => 1
        ]);
        $product6->save();

        $product7 = new Product([
            'name' => "white Grey Lexury Watch",
            'product_detail' => "White Grey Lexury Watch which looks great with all skin types and for both men and women",
            'picture' => "0kM6tTohr5TxD5HMlRVNI124542JAOGcYvPMCtrZYq.jpg",
            'category_id' => 3,
            'price' => 100,
            'amount' => 20,
            'store_id' => 1
        ]);
        $product7->save();

        $product8 = new Product([
            'name' => "Cool Lexury collection Watch",
            'product_detail' => "Cool Lexury collection Watch which looks great with all skin types and for both men and women",
            'picture' => "0kM6tTohr5TxD5HMlRVNIPh02JAlkfcYvPMCtrZYq.jpg",
            'category_id' => 3,
            'price' => 100,
            'amount' => 20,
            'store_id' => 1
        ]);
        $product8->save();

        $product9 = new Product([
            'name' => "Classic Collection Watch",
            'product_detail' => "Classic Collection Watch which looks great with all skin types and for both men and women",
            'picture' => "0kM6tTohr5TxD5HMlRVNIPh02JAOGcYvkldCtrZYq.jpg",
            'category_id' => 3,
            'price' => 100,
            'amount' => 20,
            'store_id' => 1
        ]);
        $product9->save();

        $product10 = new Product([
            'name' => "Gold Black Lexury Watch",
            'product_detail' => "Gold Black Lexury Watch which looks great with all skin types and for both men and women",
            'picture' => "0kM6tTohr5TxD5HMlRVNIP65slksfOGcYvPMCtrZYq.jpg",
            'category_id' => 3,
            'price' => 150,
            'amount' => 20,
            'store_id' => 1
        ]);
        $product10->save();

        $product11 = new Product([
            'name' => "Golded Lexury Watch",
            'product_detail' => "Golden Lexury Watch which looks great with all skin types and for both men and women",
            'picture' => "0kM6tTohr5TxD5HMlRVNIPlkaJAOGcYvPMCtrZYq.jpg",
            'category_id' => 3,
            'price' => 500,
            'amount' => 20,
            'store_id' => 1
        ]);
        $product11->save();

        $product12 = new Product([
            'name' => "Iphone X 2022",
            'product_detail' => "Iphone X phone with a lot of features Iphone X phone with a lot of features Iphone X phone with a lot of features",
            'picture' => "0kM6tTohr5TxD5HMlRVNIPh02JAOGcYvPklftrZYq.jpg",
            'category_id' => 4,
            'price' => 1200,
            'amount' => 20,
            'store_id' => 1
        ]);
        $product12->save();

        $product13 = new Product([
            'name' => "Techno 2022 phone",
            'product_detail' => "Techno 2022 phone with a lot of features Iphone X phone with a lot of features Iphone X phone with a lot of features",
            'picture' => "0kM6tTohr5TxD5HMlRVNIPh02JAOGcYvPMhhrZYq.jpg",
            'category_id' => 4,
            'price' => 1000,
            'amount' => 20,
            'store_id' => 1
        ]);
        $product13->save();

        $product14 = new Product([
            'name' => "Best Laptop Collection",
            'product_detail' => "Best laptop collection with a lot of features Iphone X phone with a lot of features Iphone X phone with a lot of features",
            'picture' => "0kM6tTohr5TxD5HMlRVNIPh02JAOGcssvPMCtrZYq.jpg",
            'category_id' => 5,
            'price' => 1600,
            'amount' => 20,
            'store_id' => 1
        ]);
        $product14->save();

        $product15 = new Product([
            'name' => "Microsoft surface laptop",
            'product_detail' => "Microsoft surface laptop with a lot of features Iphone X phone with a lot of features Iphone X phone with a lot of features",
            'picture' => "0kM6tTohr5TxD5HMlRVNIsew2JAOGcYvPMCtrZYq.jpg",
            'category_id' => 5,
            'price' => 2000,
            'amount' => 20,
            'store_id' => 1
        ]);
        $product15->save();
        $product16 = new Product([
            'name' => "Hp Core i7 black pro",
            'product_detail' => "Hp Core i7 pro with a lot of features Iphone X phone with a lot of features Iphone X phone with a lot of features",
            'picture' => "0kM6tTohr5TxD5HMlRVsdPh02JAOGcYvPMCtrZYq.jpg",
            'category_id' => 5,
            'price' => 1300,
            'amount' => 20,
            'store_id' => 1
        ]);
        $product16->save();
        $product17 = new Product([
            'name' => "Hp Core i7 grey pro",
            'product_detail' => "Hp Core i7 grey pro with a lot of features Iphone X phone with a lot of features Iphone X phone with a lot of features",
            'picture' => "0kM6tTsqhr5TxD5HMlRVNIPh02JAOGcYvPMCtrZYq.jpg",
            'category_id' => 5,
            'price' => 1100,
            'amount' => 20,
            'store_id' => 1
        ]);
        $product17->save();

    }
}
