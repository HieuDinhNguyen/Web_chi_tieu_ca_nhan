@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="col-md-8 mx-auto">
        <h4 class="mb-4 text-info">
            <i class="bi bi-folder2-open"></i> Chi tiết Danh mục Chi tiêu
        </h4>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <p><strong>ID:</strong> <span class="badge bg-secondary">{{ $expenseCategory->id }}</span></p>
                <p><strong>Tên danh mục:</strong> <span class="fw-semibold">{{ $expenseCategory->name }}</span></p>
                <p><strong>Tạo lúc:</strong> {{ $expenseCategory->created_at->format('d/m/Y H:i') }}</p>
                <p><strong>Cập nhật lúc:</strong> {{ $expenseCategory->updated_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('expense-categories.index') }}" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left-circle"></i> Quay lại danh sách
            </a>
        </div>
    </div>
</div>
@endsection
