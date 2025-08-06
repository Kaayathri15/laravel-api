<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Customer::factory()
            ->count(25)
            ->hasInvoices(10) // Each customer will have 3 invoices
            ->create();

        Customer::factory()
            ->count(100)
            ->hasInvoices(5) // Each customer will have 3 invoices
            ->create();

        Customer::factory()
            ->count(100)
            ->hasInvoices(3) // Each customer will have 3 invoices
            ->create();

        Customer::factory()
            ->count(25)
            ->create();
    }
}