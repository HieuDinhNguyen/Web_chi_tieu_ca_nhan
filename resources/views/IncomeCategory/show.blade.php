@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="container mt-4">
    <div class="col-md-8 mx-auto">
        <h4 class="mb-4 text-info">
            <i class="bi bi-folder2-open"></i> Chi tiết Danh mục Thu nhập
        </h4>

        <div class="card shadow-sm border-0 mb-4">
            <div class="card-body">
                <p><strong>ID:</strong> <span class="badge bg-secondary">{{ $incomeCategory->id }}</span></p>
                <p><strong>Tên danh mục:</strong> <span class="fw-semibold">{{ $incomeCategory->name }}</span></p>
                <p><strong>Tạo lúc:</strong> {{ $incomeCategory->created_at->format('d/m/Y H:i') }}</p>
                <p><strong>Cập nhật lúc:</strong> {{ $incomeCategory->updated_at->format('d/m/Y H:i') }}</p>
                <p><strong>Tổng số khoản thu:</strong> 
                    <span class="badge bg-success">{{ $incomeCategory->incomes->count() }} khoản</span>
                </p>
            </div>
        </div>

        @if($incomeCategory->incomes->count() > 0)
            <h5 class="mb-3">Danh sách khoản thu:</h5>
            <ul class="list-group shadow-sm mb-4">
                @foreach ($incomeCategory->incomes as $income)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <i class="bi bi-cash-coin me-1 text-success"></i>
                            {{ $income->description }} - {{ number_format($income->amount, 0) }} đ
                        </div>
                        <small class="text-muted">{{ \Carbon\Carbon::parse($income->date)->format('d/m/Y') }}</small>
                    </li>
                @endforeach
            </ul>
        @else
            <div class="alert alert-info">Chưa có khoản thu nào thuộc danh mục này.</div>
        @endif

        <a href="{{ route('income-categories.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left-circle"></i> Quay lại danh sách
        </a>
    </div>
</div>
@endsection
=======
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
    
>>>>>>> 6f9226bf273fd67d72b323de7cefb06724e94a84
