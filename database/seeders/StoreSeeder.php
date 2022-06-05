<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $store = new Store();
        $store->name = "John Doe";
        $store->email = "alextilaye79@gmail.com";
        $store->phone = "0969489521";
        $store->store_name = "Black Panther";
        $store->store_id = "blackpanther";
        $store->store_detail = "black panther store is the best store there is so you should explore to find what you like and we are giving a big give away to stay tuned";
        $store->address = "addis abeba bole street";
        $store->status = 1;
        $store->password = '$2y$10$O2LW2s04Bzy7B8.jB2L6J.eBAvNJWQOsIcg6bIqlFk44GyQlxu6d2';
        $store->logo = "0kMwe2ohr5TxDRVNIPh02JAOGcYvPMCtrZYqmedds.jpg";
        $store->save();
    }   
}
