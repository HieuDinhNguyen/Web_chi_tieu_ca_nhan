@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="col-md-8 mx-auto">
        <h4 class="mb-4 text-warning"><i class="bi bi-pencil-square"></i> Sửa Chi tiêu</h4>

        {{-- Hiển thị lỗi nếu có --}}
        @if($errors->any())
            <div class="alert alert-danger">
                <strong>Lỗi nhập liệu:</strong>
                <ul class="mb-0">
                    @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <form method="POST" action="{{ route('expenses.update', $expense) }}">
                    @csrf @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Mô tả</label>
                        <input type="text" name="description" class="form-control" value="{{ old('description', $expense->description) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Số tiền</label>
                        <input type="number" name="amount" class="form-control" value="{{ old('amount', $expense->amount) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ngày</label>
                        <input type="date" name="date" class="form-control" value="{{ old('date', $expense->date) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Danh mục</label>
                        <select name="expense_category_id" class="form-select" required>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}" {{ old('expense_category_id', $expense->expense_category_id) == $cat->id ? 'selected' : '' }}>
                                    {{ $cat->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('expenses.index') }}" class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-left-circle"></i> Huỷ
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save2"></i> Cập nhật
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
