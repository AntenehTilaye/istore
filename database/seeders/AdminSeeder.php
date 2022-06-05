<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();
        $admin->name = "Anteneh Tilaye";
        $admin->phone = "0969489521";
        $admin->email = "antenehtilaye19@gmail.com";
        $admin->address = "Adama Ethiopia";
        $admin->password = '$2y$10$O2LW2s04Bzy7B8.jB2L6J.eBAvNJWQOsIcg6bIqlFk44GyQlxu6d2';
        $admin->role = "1";
        $admin->save();
    }
}
