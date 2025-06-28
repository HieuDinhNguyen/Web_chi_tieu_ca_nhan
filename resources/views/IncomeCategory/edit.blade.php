@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="container mt-4">
    <div class="col-md-6 mx-auto">
        <h4 class="mb-4 text-warning"><i class="bi bi-pencil-square"></i> Sửa Danh mục Thu nhập</h4>

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
                <form action="{{ route('income-categories.update', $incomeCategory) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Tên danh mục</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $incomeCategory->name) }}" required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('income-categories.index') }}" class="btn btn-outline-secondary">
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
=======
    <h4>Sửa Danh mục Thu nhập</h4>
    <form action="{{ route('income-categories.update', $incomeCategory) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Tên danh mục</label>
            <input type="text" name="name" class="form-control" value="{{ $incomeCategory->name }}" required>
        </div>
        <button class="btn btn-primary">Cập nhật</button>
    </form>
>>>>>>> 6f9226bf273fd67d72b323de7cefb06724e94a84
@endsection
