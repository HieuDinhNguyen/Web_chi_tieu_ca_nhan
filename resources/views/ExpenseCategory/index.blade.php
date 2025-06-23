@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="col-md-8 mx-auto">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-primary"><i class="bi bi-folder"></i> Danh mục chi tiêu</h4>
            <a href="{{ route('expense-categories.create') }}" class="btn btn-success">
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
                        <span><i class="bi bi-tag-fill text-secondary me-2"></i>{{ $cat->name }}</span>
                        <div>
                            <a href="{{ route('expense-categories.edit', $cat) }}" class="btn btn-sm btn-outline-warning me-1">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('expense-categories.destroy', $cat) }}" method="POST" class="d-inline" onsubmit="return confirm('Xoá danh mục này?')">
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
