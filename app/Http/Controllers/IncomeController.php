<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\IncomeCategory;

class IncomeController extends Controller
{
    public function index()
    {
        $incomes = Income::with('category')->latest()->paginate(10);
        return view('Income.index', compact('incomes'));
    }

    public function create()
    {
        $categories = IncomeCategory::all();
        return view('Income.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'nullable|string|max:255',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
            'income_category_id' => 'required|exists:income_categories,id',
        ]);

        Income::create($request->all());

<<<<<<< HEAD
        return redirect()->route('incomes.index')->with('success', 'Thu nhập đã được thêm.');
=======
        return redirect()->route('Income.index')->with('success', 'Thu nhập đã được thêm.');
>>>>>>> 6f9226bf273fd67d72b323de7cefb06724e94a84
    }

    public function show(Income $income)
    {
<<<<<<< HEAD
        return view('incomes.show', compact('income'));
=======
        return view('Income.show', compact('income'));
>>>>>>> 6f9226bf273fd67d72b323de7cefb06724e94a84
    }

    public function edit(Income $income)
    {
        $categories = IncomeCategory::all();
        return view('Income.edit', compact('income', 'categories'));
    }

    public function update(Request $request, Income $income)
    {
        $request->validate([
            'description' => 'nullable|string|max:255',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
            'income_category_id' => 'required|exists:income_categories,id',
        ]);

        $income->update($request->all());

<<<<<<< HEAD
        return redirect()->route('incomes.index')->with('success', 'Thu nhập đã được cập nhật.');
=======
        return redirect()->route('Income.index')->with('success', 'Thu nhập đã được cập nhật.');
>>>>>>> 6f9226bf273fd67d72b323de7cefb06724e94a84
    }

    public function destroy(Income $income)
    {
        $income->delete();
<<<<<<< HEAD
        return redirect()->route('incomes.index')->with('success', 'Thu nhập đã được xoá.');
=======
        return redirect()->route('Income.index')->with('success', 'Thu nhập đã được xoá.');
>>>>>>> 6f9226bf273fd67d72b323de7cefb06724e94a84
    } 

}
