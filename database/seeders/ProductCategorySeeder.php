<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pd = new ProductCategory([
            'productId' => 1,
            'categoryId' => 1
        ]);
        $pd->save();
        $pd = new ProductCategory([
            'productId' => 2,
            'categoryId' => 2
        ]);
        $pd->save();
        $pd = new ProductCategory([
            'productId' => 3,
            'categoryId' => 2
        ]);
        $pd->save();
        $pd = new ProductCategory([
            'productId' => 4,
            'categoryId' => 2
        ]);
        $pd->save();
        $pd = new ProductCategory([
            'productId' => 5,
            'categoryId' => 2
        ]);
        $pd->save();
        $pd = new ProductCategory([
            'productId' => 6,
            'categoryId' => 3
        ]);
        $pd->save();
        $pd = new ProductCategory([
            'productId' => 7,
            'categoryId' => 3
        ]);
        $pd->save();
        $pd = new ProductCategory([
            'productId' => 8,
            'categoryId' => 3
        ]);
        $pd->save();
        $pd = new ProductCategory([
            'productId' => 9,
            'categoryId' => 3
        ]);
        $pd->save();
        $pd = new ProductCategory([
            'productId' => 10,
            'categoryId' => 3
        ]);
        $pd->save();
        $pd = new ProductCategory([
            'productId' => 11,
            'categoryId' => 3
        ]);
        $pd->save();
        $pd = new ProductCategory([
            'productId' => 12,
            'categoryId' => 4
        ]);
        $pd->save();
        $pd = new ProductCategory([
            'productId' => 13,
            'categoryId' => 5
        ]);
        $pd->save();
        $pd = new ProductCategory([
            'productId' => 14,
            'categoryId' => 5
        ]);
        $pd->save();

        $pd = new ProductCategory([
            'productId' => 15,
            'categoryId' => 5
        ]);
        $pd->save();

        $pd = new ProductCategory([
            'productId' => 16,
            'categoryId' => 5
        ]);
        $pd->save();

        $pd = new ProductCategory([
            'productId' => 17,
            'categoryId' => 5
        ]);
        $pd->save();

    }
}
