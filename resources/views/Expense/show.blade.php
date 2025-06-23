@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h4 class="mb-4 text-primary"><i class="bi bi-receipt-cutoff"></i> Chi tiết Chi tiêu</h4>

            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <strong>Thông tin chi tiết</strong>
                </div>
                <div class="card-body">
                    <p><strong>Mô tả:</strong> {{ $expense->description ?? 'Không có mô tả' }}</p>
                    <p><strong>Số tiền:</strong> 
                        <span class="badge bg-success fs-6">{{ number_format($expense->amount, 0) }} đ</span>
                    </p>
                    <p><strong>Ngày:</strong> {{ \Carbon\Carbon::parse($expense->date)->format('d/m/Y') }}</p>
                    <p><strong>Danh mục:</strong> 
                        <span class="badge bg-info text-dark">{{ $expense->category->name ?? 'Không xác định' }}</span>
                    </p>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('expenses.index') }}" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left-circle"></i> Quay lại danh sách
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

