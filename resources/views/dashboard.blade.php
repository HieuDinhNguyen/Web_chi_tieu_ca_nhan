<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | Quản lý chi tiêu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap 5 CSS + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        body { font-family: 'Segoe UI', sans-serif; }
        .sidebar {
            width: 230px;
            height: 100vh;
            background-color: #1e2a38;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
            color: #fff;
        }
        .sidebar a {
            color: #fff;
            display: block;
            margin: 8px 0;
            text-decoration: none;
        }
        .sidebar a:hover {
            color: #0dcaf0;
        }
        .main-content {
            margin-left: 230px;
            padding: 30px;
            background-color: #f8f9fa;
            min-height: 100vh;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h5 class="text-white"><i class="bi bi-piggy-bank-fill me-2"></i>Chi tiêu cá nhân</h5>
    <hr class="text-white">
    
    <p class="fw-semibold">Chi tiêu</p>
    <a href="{{ route('expenses.index') }}">📋 Danh sách</a>
    <a href="{{ route('expenses.create') }}">➕ Thêm mới</a>

    <p class="fw-semibold mt-3">Thu nhập</p>
    <a href="{{ route('incomes.index') }}">📋 Danh sách</a>
    <a href="{{ route('incomes.create') }}">➕ Thêm mới</a>

    <p class="fw-semibold mt-3">Danh mục</p>
    <a href="{{ route('expense-categories.index') }}">📂 Chi tiêu</a>
    <a href="{{ route('income-categories.index') }}">📂 Thu nhập</a>
</div>

<!-- Main -->
<div class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4>📊 Dashboard</h4>

        <!-- Dropdown Xin chào -->
        <div class="dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Xin chào, <strong>{{ Auth::user()->name ?? 'User' }}</strong>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                <li>
                    <a class="dropdown-item" href="{{ route('dashboard') }}">
                        <i class="bi bi-person-circle me-2"></i> Hồ sơ
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger">
                            <i class="bi bi-box-arrow-right me-2"></i> Đăng xuất
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>


    <!-- Summary Cards -->
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card border-start border-danger border-4 shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Tổng Chi tiêu</h6>
                    <h4 class="text-danger">{{ number_format($totalExpense) }} đ</h4>
                    <small>{{ $expenseCount }} giao dịch</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-start border-success border-4 shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Tổng Thu nhập</h6>
                    <h4 class="text-success">{{ number_format($totalIncome) }} đ</h4>
                    <small>{{ $incomeCount }} giao dịch</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-start border-warning border-4 shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Danh mục Chi tiêu</h6>
                    <h4>{{ $expenseCategoryCount }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-start border-info border-4 shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Danh mục Thu nhập</h6>
                    <h4>{{ $incomeCategoryCount }}</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Giao dịch gần đây -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-light fw-bold">
            📅 Chi tiêu gần đây
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Mô tả</th>
                        <th>Số tiền</th>
                        <th>Ngày</th>
                        <th>Danh mục</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recentExpenses as $i => $ex)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $ex->description }}</td>
                        <td class="text-danger">{{ number_format($ex->amount) }} đ</td>
                        <td>{{ $ex->date }}</td>
                        <td>{{ $ex->category->name ?? '-' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
