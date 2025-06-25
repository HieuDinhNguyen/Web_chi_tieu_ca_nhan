@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4><i class="bi bi-plus-circle"></i> Thêm Thu nhập</h4>
        <a href="{{ route('incomes.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Quay lại
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form method="POST" action="{{ route('incomes.store') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Mô tả</label>
                    <input type="text" name="description" class="form-control" placeholder="Ví dụ: Lương tháng, thưởng..." value="{{ old('description') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Số tiền</label>
                    <input type="number" name="amount" class="form-control" placeholder="VD: 5000000" value="{{ old('amount') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Ngày</label>
                    <input type="date" name="date" class="form-control" value="{{ old('date', now()->toDateString()) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Danh mục</label>
                    <select name="income_category_id" class="form-select" required>
                        <option value="">-- Chọn danh mục --</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ old('income_category_id') == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-circle"></i> Lưu
                    </button>
                    <a href="{{ route('incomes.index') }}" class="btn btn-danger">
                        <i class="bi bi-x-circle"></i> Huỷ
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection

