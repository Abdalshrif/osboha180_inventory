<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

Class DatabaseSeeder extends Seeder

{
    public function run()
    {
        $this->call(LaratrustSeeder::class);
    }
}
