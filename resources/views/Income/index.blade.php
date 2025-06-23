@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4><i class="bi bi-cash-stack me-1"></i> Danh sách Thu nhập</h4>
        <a href="{{ route('incomes.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle me-1"></i> Thêm mới
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body table-responsive">
            <table class="table table-hover table-bordered align-middle">
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
                    @forelse ($incomes as $i => $income)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $income->description }}</td>
                            <td class="text-success fw-bold">{{ number_format($income->amount, 0) }} đ</td>
                            <td>{{ $income->date }}</td>
                            <td>{{ $income->category->name ?? '-' }}</td>
                            <td class="text-center">
                                <a href="{{ route('incomes.show', $income) }}" class="btn btn-sm btn-info text-white">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('incomes.edit', $income) }}" class="btn btn-sm btn-warning text-white">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('incomes.destroy', $income) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Bạn chắc chắn muốn xoá?')">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">Không có dữ liệu thu nhập.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{-- Phân trang --}}
            <div class="d-flex justify-content-center">
                {{ $incomes->links() }}
            </div>
        </div>
    </div>
@endsection
