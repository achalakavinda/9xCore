<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            GeneralLedgerSeeder::class,
            Important::class,
            RolesAndPermissionsSeeder::class,
            CompanyDetailSeeder::class,
            RequisitionStatusSeeder::class,
            TestDataSeeder::class,
            InventorySeeder::class
        ]);



    }
}
