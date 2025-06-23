@extends('layouts.app')

@section('content')
    <h4>Danh mục Thu nhập</h4>
    <a href="{{ route('income-categories.create') }}" class="btn btn-primary mb-3">+ Thêm danh mục</a>

    <ul class="list-group">
        @foreach($categories as $cat)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('income-categories.show', $cat) }}">{{ $cat->name }}</a>
                <span>{{ $cat->incomes_count }} khoản</span>
            </li>
        @endforeach
    </ul>
@endsection
