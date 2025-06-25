<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExpenseCategory;

class ExpenseCategoryController extends Controller
{
    public function index()
    {
        $categories = ExpenseCategory::all();
        return view('ExpenseCategory.index', compact('categories'));
    }

    public function create()
    {
        return view('ExpenseCategory.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        ExpenseCategory::create($request->only('name'));

        return redirect()->route('expense-categories.index')->with('success', 'Danh mục đã được thêm.');
    }

    public function edit(ExpenseCategory $expenseCategory)
    {
        return view('ExpenseCategory.edit', compact('expenseCategory'));
    }

    public function update(Request $request, ExpenseCategory $expenseCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $expenseCategory->update($request->only('name'));

        return redirect()->route('expense-categories.index')->with('success', 'Cập nhật thành công.');
    }

    public function destroy(ExpenseCategory $expenseCategory)
    {
        $expenseCategory->delete();
        return redirect()->route('expense-categories.index')->with('success', 'Đã xoá danh mục.');
    }

    public function show(ExpenseCategory $expenseCategory)
    {
        return view('ExpenseCategory.show', compact('expenseCategory'));
    }
}
