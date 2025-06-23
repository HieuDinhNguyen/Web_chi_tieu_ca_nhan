<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ExpenseCategory;

class ExpenseCategorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Ăn uống', 'Di chuyển', 'Giải trí', 'Học tập', 'Mua sắm'];

        foreach ($categories as $name) {
            ExpenseCategory::create(['name' => $name]);
        }
    }
}
