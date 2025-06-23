<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Income;
use App\Models\IncomeCategory;
use Illuminate\Support\Carbon;

class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $incomes = [
            [
                'description' => 'Lương tháng 6',
                'amount' => 10000000,
                'date' => Carbon::now()->subDays(3)->toDateString(),
                'income_category_id' => 1,
            ],
            [
                'description' => 'Tiền thưởng',
                'amount' => 2000000,
                'date' => Carbon::now()->toDateString(),
                'income_category_id' => 2,
            ],
            [
                'description' => 'Dạy thêm',
                'amount' => 1500000,
                'date' => Carbon::now()->subWeek()->toDateString(),
                'income_category_id' => 1,
            ],
        ];

        foreach ($incomes as $data) {
            Income::create($data);
        }
    }
}
