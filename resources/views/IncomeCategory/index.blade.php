@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="col-md-8 mx-auto">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-primary"><i class="bi bi-folder"></i> Danh mục Thu nhập</h4>
            <a href="{{ route('income-categories.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Thêm danh mục
            </a>
        </div>

        {{-- Thông báo khi thêm/sửa/xoá --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Đóng"></button>
            </div>
        @endif

        @if($categories->count() > 0)
            <ul class="list-group shadow-sm">
                @foreach($categories as $cat)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-tag-fill text-secondary me-2"></i>
                            <a href="{{ route('income-categories.show', $cat) }}" class="text-decoration-none text-dark">
                                {{ $cat->name }}
                            </a>
                        </div>
                        <div>
                            <span class="badge bg-info text-dark me-2">{{ $cat->incomes_count }} khoản</span>
                            <a href="{{ route('income-categories.edit', $cat) }}" class="btn btn-sm btn-outline-warning me-1">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('income-categories.destroy', $cat) }}" method="POST" class="d-inline" onsubmit="return confirm('Xoá danh mục này?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        @else
            <div class="alert alert-info">Chưa có danh mục nào.</div>
        @endif
    </div>
</div>
@endsection
