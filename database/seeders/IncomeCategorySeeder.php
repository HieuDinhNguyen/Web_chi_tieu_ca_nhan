<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\IncomeCategory;

class IncomeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Lương', 'Thưởng', 'Dự án phụ', 'Đầu tư', 'Khác'];

        foreach ($categories as $name) {
            IncomeCategory::create(['name' => $name]);
        }
    }
}
