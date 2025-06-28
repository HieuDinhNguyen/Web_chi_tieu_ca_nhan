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

<<<<<<< HEAD
        return redirect()->route('income-categories.index')->with('success', 'Đã thêm danh mục.');
=======
        return redirect()->route('IncomeCategory.index')->with('success', 'Đã thêm danh mục.');
>>>>>>> 6f9226bf273fd67d72b323de7cefb06724e94a84
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

<<<<<<< HEAD
        return redirect()->route('income-categories.index')->with('success', 'Đã cập nhật.');
=======
        return redirect()->route('IncomeCategory.index')->with('success', 'Đã cập nhật.');
>>>>>>> 6f9226bf273fd67d72b323de7cefb06724e94a84
    }

    public function destroy(IncomeCategory $incomeCategory)
    {
        $incomeCategory->delete();
<<<<<<< HEAD
        return redirect()->route('income-categories.index')->with('success', 'Đã xoá danh mục.');
=======
        return redirect()->route('IncomeCategory.index')->with('success', 'Đã xoá danh mục.');
>>>>>>> 6f9226bf273fd67d72b323de7cefb06724e94a84
    }
}
