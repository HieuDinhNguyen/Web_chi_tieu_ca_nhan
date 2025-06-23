@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="text-primary"><i class="bi bi-list-ul"></i> Danh sách Chi tiêu</h4>
        <a href="{{ route('expenses.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Thêm mới
        </a>
    </div>

    {{-- Hiển thị thông báo thành công nếu có --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Đóng"></button>
        </div>
    @endif

    <div class="table-responsive shadow-sm rounded">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Mô tả</th>
                    <th>Số tiền</th>
                    <th>Ngày</th>
                    <th>Danh mục</th>
                    <th class="text-center">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @forelse($expenses as $key => $expense)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $expense->description }}</td>
                        <td class="text-danger fw-bold">{{ number_format($expense->amount, 0) }} đ</td>
                        <td>{{ \Carbon\Carbon::parse($expense->date)->format('d/m/Y') }}</td>
                        <td>{{ $expense->category->name ?? '-' }}</td>
                        <td class="text-center">
                            <a href="{{ route('expenses.show', $expense) }}" class="btn btn-sm btn-outline-info">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="{{ route('expenses.edit', $expense) }}" class="btn btn-sm btn-outline-warning">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('expenses.destroy', $expense) }}" method="POST" class="d-inline" onsubmit="return confirm('Xoá chi tiêu này?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">Chưa có dữ liệu chi tiêu.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
