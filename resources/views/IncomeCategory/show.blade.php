@extends('layouts.app')

@section('content')
    <h4>Chi tiết Danh mục Thu nhập</h4>

    <p><strong>Tên:</strong> {{ $incomeCategory->name }}</p>
    <p><strong>Tổng thu nhập:</strong> {{ $incomeCategory->incomes->count() }} khoản</p>

    <h5>Các khoản thu:</h5>
    <ul class="list-group">
        @foreach ($incomeCategory->incomes as $income)
            <li class="list-group-item">
                {{ $income->description }} - {{ number_format($income->amount, 0) }}đ ({{ $income->date }})
            </li>
        @endforeach
    </ul>

    <a href="{{ route('income-categories.index') }}" class="btn btn-secondary mt-3">← Quay lại</a>
@endsection
    