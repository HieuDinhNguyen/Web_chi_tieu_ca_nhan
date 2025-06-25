@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-success"><i class="bi bi-cash-coin me-1"></i> Chi tiết Thu nhập</h4>
                <a href="{{ route('incomes.index') }}" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left-circle me-1"></i> Quay lại
                </a>
            </div>

            <div class="card shadow-sm border-start border-success border-4">
                <div class="card-header bg-success text-white">
                    <strong>Thông tin chi tiết</strong>
                </div>

                <div class="card-body">
                    <p><strong>Mô tả:</strong> {{ $income->description ?? 'Không có mô tả' }}</p>
                    
                    <p><strong>Số tiền:</strong> 
                        <span class="badge bg-success fs-6">
                            {{ number_format($income->amount, 0, ',', '.') }} đ
                        </span>
                    </p>
                    
                    <p><strong>Ngày:</strong> 
                        {{ \Carbon\Carbon::parse($income->date)->format('d/m/Y') }}
                    </p>

                    <p><strong>Danh mục:</strong> 
                        <span class="badge bg-info text-dark">
                            {{ optional($income->category)->name ?? 'Không xác định' }}
                        </span>
                    </p>

                    <p><strong>Thêm lúc:</strong> 
                        {{ $income->created_at->format('d/m/Y H:i') }}
                    </p>

                    <p><strong>Cập nhật lúc:</strong> 
                        {{ $income->updated_at->format('d/m/Y H:i') }}
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
