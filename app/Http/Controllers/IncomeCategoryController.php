<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncomeCategory;

class IncomeCategoryController extends Controller
{
    public function index()
    {
        $categories = IncomeCategory::withCount('incomes')->get();
        return view('IncomeCategory.index', compact('categories'));
    }

    public function create()
    {
        return view('IncomeCategory.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        IncomeCategory::create($request->only('name'));

        return redirect()->route('income-categories.index')->with('success', 'Đã thêm danh mục.');
    }

    public function show(IncomeCategory $incomeCategory)
    {
        $incomeCategory->load('incomes');
        return view('IncomeCategory.show', compact('incomeCategory'));
    }

    public function edit(IncomeCategory $incomeCategory)
    {
        return view('IncomeCategory.edit', compact('incomeCategory'));
    }

    public function update(Request $request, IncomeCategory $incomeCategory)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $incomeCategory->update($request->only('name'));

        return redirect()->route('income-categories.index')->with('success', 'Đã cập nhật.');
    }

    public function destroy(IncomeCategory $incomeCategory)
    {
        $incomeCategory->delete();
        return redirect()->route('income-categories.index')->with('success', 'Đã xoá danh mục.');
    }
}
