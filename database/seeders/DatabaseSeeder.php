<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'samiraelshon',
            'email' => 'samiraelshon@gmail.com',
            'password' => Hash::make(123456789),
        ]);
        DB::table('invoices')->insert([
            'name' => 'samiraelshon',
            'phone' => '4567890',
            'address' => 'shebin',
            'sub_total' => '500',
            'total_vat' =>'100',
            'final_total' => '1000',
            'paid_in_cash' => '800',
            'change_due' => '200',
            'date' => '2022-09-01',
            'invoice_type' => 'مبيعات',
            'tax_number' => '3456789',
            'cus_tax_number' => '234567'
        ]);
        DB::table('invoice_details')->insert([
            'product_name' => 'sugar',
            'quantity' => '3',
            'price' => '15',
            'total_price' => '45',
            'invoice_id' => '3'
        ]);
    }
}
