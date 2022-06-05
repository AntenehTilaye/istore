<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category([
            'name' => 'Shoes',
            'link_name' => 'blackpanther_shoes',
            'store_id' => 1
        ]);
        $category->save();
        $category2 = new Category([
            'name' => 'Womens Dress',
            'link_name' => 'blackpanther_women_dress',
            'store_id' => 1
        ]);
        $category2->save();
        $category3 = new Category([
            'name' => 'Lexury Watch',
            'link_name' => 'blackpanther_lexury_watch',
            'store_id' => 1
        ]);
        $category3->save();
        $category4 = new Category([
            'name' => 'Mobile Phone',
            'link_name' => 'blackpanther_mobile_phone',
            'store_id' => 1
        ]);
        $category4->save();
        $category5 = new Category([
            'name' => 'Laptop',
            'link_name' => 'blackpanther_laptop',
            'store_id' => 1
        ]);
        $category5->save();
    }
}
