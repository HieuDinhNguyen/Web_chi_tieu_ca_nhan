@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="col-md-6 mx-auto">
        <h4 class="mb-4 text-primary"><i class="bi bi-folder-plus"></i> Thêm Danh mục Thu nhập</h4>

        {{-- Hiển thị lỗi --}}
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
                <form action="{{ route('income-categories.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Tên danh mục</label>
                        <input type="text" name="name" class="form-control" placeholder="Ví dụ: Lương, Thưởng..." value="{{ old('name') }}" required>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('income-categories.index') }}" class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-left-circle"></i> Huỷ
                        </a>
                        <button class="btn btn-primary">
                            <i class="bi bi-save2"></i> Lưu
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
