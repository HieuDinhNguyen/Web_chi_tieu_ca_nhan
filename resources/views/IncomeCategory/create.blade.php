@extends('layouts.app')

@section('content')
    <h4>Thêm Danh mục Thu nhập</h4>
    <form action="{{ route('income-categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Tên danh mục</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button class="btn btn-primary">Lưu</button>
    </form>
@endsection
