<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\ExpenseCategory;
use Exception;


class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::with('category')->latest()->get();
        return view('Expense.index', compact('expenses'));
    }

    // Hiển thị form thêm mới
    public function create()
    {
        $categories = ExpenseCategory::all();
        return view('Expense.create', compact('categories'));
    }

    // Lưu chi tiêu mới
    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
            'expense_category_id' => 'required|exists:expense_categories,id',
        ]);

        try {
            Expense::create($validated);
            return redirect()->route('Expense.index')->with('success', 'Thêm chi tiêu thành công!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Không thể thêm chi tiêu.');
        }
    }

    // Hiển thị form sửa
    public function edit($id)
    {
        $expense = Expense::findOrFail($id);
        $categories = ExpenseCategory::all();
        return view('Expense.edit', compact('expense', 'categories'));
    }

    // Cập nhật chi tiêu
    public function update(Request $request, $id)
    {
        $expense = Expense::findOrFail($id);

        $validated = $request->validate([
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
            'expense_category_id' => 'required|exists:expense_categories,id',
        ]);

        try {
            $expense->update($validated);
            return redirect()->route('Expense.index')->with('success', 'Cập nhật chi tiêu thành công!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Không thể cập nhật chi tiêu.');
        }
    }

    // Xoá chi tiêu
    public function destroy($id)
    {
        $expense = Expense::findOrFail($id);

        try {
            $expense->delete();
            return redirect()->route('Expense.index')->with('success', 'Xoá chi tiêu thành công!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Không thể xoá chi tiêu.');
        }
    }

    // Hiển thị chi tiết chi tiêu
    public function show($id)
    {
        $expense = Expense::with('category')->findOrFail($id);
        return view('Expense.show', compact('expense'));
    }
}
