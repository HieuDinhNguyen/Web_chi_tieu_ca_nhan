<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\IncomeCategoryController;
use App\Models\Expense;
use App\Models\Income;
use App\Models\IncomeCategory;
use App\Models\ExpenseCategory;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard', [
            'expenses' => Expense::with('category')->latest()->take(5)->get(),
            'incomes' => Income::with('category')->latest()->take(5)->get(),
            'income-categories' => IncomeCategory::all(),
            'expense-categories' => ExpenseCategory::all(),
        ]);
    })->name('dashboard');

    Route::resource('expenses', ExpenseController::class);
    Route::resource('incomes', IncomeController::class);
    Route::resource('income-categories', IncomeCategoryController::class);
    Route::resource('expense-categories', ExpenseCategoryController::class);
});

Route::resource('expenses', ExpenseController::class);
Route::resource('incomes', IncomeController::class);
Route::resource('income-categories', IncomeCategoryController::class);
Route::resource('expense-categories', ExpenseCategoryController::class);

Route::get('/dashboard', function () {
    return view('dashboard', [
        'totalExpense' => Expense::sum('amount'),
        'totalIncome' => Income::sum('amount'),
        'expenseCount' => Expense::count(),
        'incomeCount' => Income::count(),
        'expenseCategoryCount' => ExpenseCategory::count(),
        'incomeCategoryCount' => IncomeCategory::count(),
        'recentExpenses' => Expense::with('category')->latest()->take(5)->get(),
    ]);
})->middleware('auth')->name('dashboard');

