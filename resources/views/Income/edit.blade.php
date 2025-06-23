@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4><i class="bi bi-pencil-square"></i> Sửa Thu nhập</h4>
        <a href="{{ route('incomes.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Quay lại
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form method="POST" action="{{ route('incomes.update', $income) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Mô tả</label>
                    <input type="text" name="description" class="form-control"
                           value="{{ old('description', $income->description) }}"
                           placeholder="Ví dụ: Lương tháng 6">
                </div>

                <div class="mb-3">
                    <label class="form-label">Số tiền</label>
                    <input type="number" name="amount" class="form-control"
                           value="{{ old('amount', $income->amount) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Ngày</label>
                    <input type="date" name="date" class="form-control"
                           value="{{ old('date', $income->date) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Danh mục</label>
                    <select name="income_category_id" class="form-select" required>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}"
                                {{ old('income_category_id', $income->income_category_id) == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <button class="btn btn-success">
                        <i class="bi bi-check-circle"></i> Cập nhật
                    </button>
                    <a href="{{ route('incomes.index') }}" class="btn btn-danger">
                        <i class="bi bi-x-circle"></i> Huỷ
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
