@extends('layouts.app')

@section('content')
    <h4>Sửa Danh mục Thu nhập</h4>
    <form action="{{ route('income-categories.update', $incomeCategory) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Tên danh mục</label>
            <input type="text" name="name" class="form-control" value="{{ $incomeCategory->name }}" required>
        </div>
        <button class="btn btn-primary">Cập nhật</button>
    </form>
@endsection
