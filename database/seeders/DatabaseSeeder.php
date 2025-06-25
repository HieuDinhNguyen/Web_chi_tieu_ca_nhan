<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Expense;
use App\Models\ExpenseCategory;
use App\Models\Income;
use App\Models\IncomeCategory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        \App\Models\User::where('email', 'user2@example.com')->delete();

        User::factory()->create([
            'name' => 'User',
            'email' => 'user2@example.com'
        ]);


        $this->call([
            ExxpenseSeeder::class,
        ]);

        $this->call([
            ExpenseCategorSeeder::class,
        ]);

        $this->call([
            IncomeSeeder::class,
        ]);
    }
}
