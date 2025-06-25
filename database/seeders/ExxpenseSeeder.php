<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ExpenseCategory;
use App\Models\Expense;
use Illuminate\Support\Carbon;

class ExxpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $expenses = [
            [
                'description' => 'Ăn sáng',
                'amount' => 30000,
                'date' => Carbon::now()->subDays(1)->toDateString(),
                'expense_category_id' => 1,
            ],
            [
                'description' => 'Đi cà phê',
                'amount' => 50000,
                'date' => Carbon::now()->toDateString(),
                'expense_category_id' => 1,
            ],
            [
                'description' => 'Mua sách',
                'amount' => 100000,
                'date' => Carbon::now()->subDays(2)->toDateString(),
                'expense_category_id' => 2,
            ],
        ];

        foreach ($expenses as $data) {
            Expense::create($data);
        }
    }
}
