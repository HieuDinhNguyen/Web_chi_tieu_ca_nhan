# Web_chi_tieu_ca_nhan
## 👤 Thông Tin Cá Nhân
* **Họ và tên**: Nguyễn Đình Hiếu

* **Mã sinh viên**: 23010827

* **Lớp**: CNTT_9

* **Môn học**: Xây dựng Web nâng cao (TH3)
## Mục đích nghiên cứu
* Mục đích chính của đề tài này là phát triển một ứng dụng quản lý chi tiêu cá nhân hiệu quả, nhằm giúp người dùng theo dõi, kiểm soát và lập kế hoạch chi tiêu một cách thông minh và hiệu quả. Một trong những mục tiêu quan trọng nhất là xây dựng một ứng dụng dễ dàng sử dụng. Việc thiết kế giao diện và trải nghiệm của người dùng là yếu tố quan trọng giúp tăng cường tính tiếp cận và số lượng sử dụng của người dùng.

* Ngoài ra ứng dụng cũng cần tích hợp các tính năng cần thiết để hỗ trợ người dung trong việc quản lý tài chính cá nhân. Các tính năng này có thể bao gồm: 

 - Khả năng nhập thông tin chi tiêu dễ dàng và nhanh chóng.

 - Tính năng tự động phân loại các khoản chi tiêu theo danh mục khác nhau (ví dụ: ăn uống, đi lại, giải trí,…).

 - Khả năng thiết lập mục tiêu tiết kiệm và theo dõi tiến độ đối với các mục tiêu này.

 - Cung cấp các báo cáo, phân tích chi tiêu để người dùng hiểu rõ hơn về mô hình chi tiêu của mình và từ đó có thể đưa ra các quyết định tài chính thông minh hơn trong tương lai.

* Và cuối cùng mục tiêu của việc nghiên cứu là tạo ra ứng dụng có khả năng thúc đẩy sự thay đổi hành vi tài chính tích cực cho người dùng. Bằng cách cung cấp các công cụ và thông tin phù hợp, ứng dụng sẽ giúp người dùng xây dựng và duy trì các thói quen quản lý tài chính lành mạnh, từ đó giúp họ đạt được sự ổn định tài chính và tiến gần đến các mục tiêu cá nhân.
## Đối tượng và phạm vi nghiên cứu
*	Đối tượng nghiên cứu: Hệ thống ứng dụng quản lý chi tiêu.

*	Đối tượng sử dụng: Các cá nhân có nhu cầu quản lý chi tiêu cá nhân.

*	Phạm vi nghiên cứu: Tập trung vào phát triển các tính năng quản lý chi tiêu cơ bản và mở rộng để đáp ứng các nhu cầu đặc biệt của người dùng.
## Hệ thống sử dụng
* PHP (Laravel framework)

* Laravel Breeze
  
* MySQL (Aiven Cloud)
  
* Eloquent ORM (Hệ thống ORM giúp tương tác với CSDL)
  
* Frontend & UI (Blade engine, Tailwind CSS, Bootstrap 5)
  
* Laravel Security (Framework hỗ trợ)
  
* AJAX JQuery (Phục vụ tìm kiếm)
## Sơ đồ usecase tổng quát
* Sơ đồ tổng quát

  ![image](https://github.com/user-attachments/assets/80b1f9b4-1fc1-499b-b870-52ee8224e8e6)
  
* Sử dụng hệ thống
  
  ![image](https://github.com/user-attachments/assets/c0549c99-5dcc-4dda-9da7-01e470d419f3)

## Đặc tả chức năng
* Chức năng quản lý hoạt động chi tiêu

![image](https://github.com/user-attachments/assets/e14a7706-9e39-41fa-a966-911edffa9daf)

* Chức năng quản lý hoạt động thu nhập

![image](https://github.com/user-attachments/assets/047c2495-de7d-4fb7-bf83-c2613265ff3a)

* Chức năng quản lý các nguồn thu nhập

![image](https://github.com/user-attachments/assets/459f760e-be04-4871-aa3d-42e32567a307)

* Chức năng quản lý các nguồn chi tiêu

![image](https://github.com/user-attachments/assets/eef5704d-9529-4660-97da-3befd054a7eb)


## Sơ đồ tuần tự 
* Sơ đồ giao diện người dùng

![image](https://github.com/user-attachments/assets/a53b9434-2958-4313-b41e-d53d4e0499ca)

* Sơ đồ giao diện quản lý chi tiêu

![image](https://github.com/user-attachments/assets/478a7458-0ebc-4066-9c00-dd32cab009b6)

* Sơ đồ giao diện quản lý thu nhập

![image](https://github.com/user-attachments/assets/ed79df02-0ce6-4b34-b4a1-38e6a9ed5ed0)

* Sơ đồ quản lý các loại thu

![image](https://github.com/user-attachments/assets/eacad4b9-0380-4d9d-8516-914ee064104f)

* Sơ đồ quản lý các loại chi

![image](https://github.com/user-attachments/assets/aa096d5e-57ad-4c58-83ca-3068942117fd)

* Link README.MD: https://hieudinhnguyen.github.io/Web_chi_tieu_ca_nhan/

* Link Repo: https://github.com/HieuDinhNguyen/Web_chi_tieu_ca_nhan

## Các đối tượng
* Expense
```markdown
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'amount', 'date', 'expense_category_id'];

    public function category()
    {
        return $this->belongsTo(ExpenseCategory::class, 'expense_category_id');
    }
}
```

* ExpenseCategory
```markdown
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExpenseCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }
}
```

* Income
```markdown
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Income extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'amount',
        'date'
    ];
    public function category()
    {
        return $this->belongsTo(IncomeCategory::class, 'income_category_id');
    }
}
```

* IncomeCategory
```markdown
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IncomeCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function incomes()
    {
        return $this->hasMany(Income::class);
    }
}
```
## Xây dựng CRUD cho các đối tượng
* ExpenseController
```markdown
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\ExpenseCategory;
use Exception;


class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::with('category')->latest()->get();
        return view('Expense.index', compact('expenses'));
    }

    // Hiển thị form thêm mới
    public function create()
    {
        $categories = ExpenseCategory::all();
        return view('Expense.create', compact('categories'));
    }

    // Lưu chi tiêu mới
    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
            'expense_category_id' => 'required|exists:expense_categories,id',
        ]);

        try {
            Expense::create($validated);
            return redirect()->route('Expense.index')->with('success', 'Thêm chi tiêu thành công!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Không thể thêm chi tiêu.');
        }
    }

    // Hiển thị form sửa
    public function edit($id)
    {
        $expense = Expense::findOrFail($id);
        $categories = ExpenseCategory::all();
        return view('Expense.edit', compact('expense', 'categories'));
    }

    // Cập nhật chi tiêu
    public function update(Request $request, $id)
    {
        $expense = Expense::findOrFail($id);

        $validated = $request->validate([
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
            'expense_category_id' => 'required|exists:expense_categories,id',
        ]);

        try {
            $expense->update($validated);
            return redirect()->route('Expense.index')->with('success', 'Cập nhật chi tiêu thành công!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Không thể cập nhật chi tiêu.');
        }
    }

    // Xoá chi tiêu
    public function destroy($id)
    {
        $expense = Expense::findOrFail($id);

        try {
            $expense->delete();
            return redirect()->route('Expense.index')->with('success', 'Xoá chi tiêu thành công!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Không thể xoá chi tiêu.');
        }
    }

    // Hiển thị chi tiết chi tiêu
    public function show($id)
    {
        $expense = Expense::with('category')->findOrFail($id);
        return view('Expense.show', compact('expense'));
    }
}
```

* ExpenseCategoryController
```markdown
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExpenseCategory;

class ExpenseCategoryController extends Controller
{
    public function index()
    {
        $categories = ExpenseCategory::all();
        return view('ExpenseCategory.index', compact('categories'));
    }

    public function create()
    {
        return view('ExpenseCategory.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        ExpenseCategory::create($request->only('name'));

        return redirect()->route('ExpenseCategory.index')->with('success', 'Danh mục đã được thêm.');
    }

    public function edit(ExpenseCategory $expenseCategory)
    {
        return view('ExpenseCategory.edit', compact('expenseCategory'));
    }

    public function update(Request $request, ExpenseCategory $expenseCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $expenseCategory->update($request->only('name'));

        return redirect()->route('ExpenseCategory.index')->with('success', 'Cập nhật thành công.');
    }

    public function destroy(ExpenseCategory $expenseCategory)
    {
        $expenseCategory->delete();
        return redirect()->route('ExpenseCategory.index')->with('success', 'Đã xoá danh mục.');
    }

    public function show(ExpenseCategory $expenseCategory)
    {
        return view('ExpenseCategory.show', compact('expenseCategory'));
    }
}
```
* IncomeController
```markdown
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\IncomeCategory;

class IncomeController extends Controller
{
    public function index()
    {
        $incomes = Income::with('category')->latest()->paginate(10);
        return view('Income.index', compact('incomes'));
    }

    public function create()
    {
        $categories = IncomeCategory::all();
        return view('Income.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'nullable|string|max:255',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
            'income_category_id' => 'required|exists:income_categories,id',
        ]);

        Income::create($request->all());

        return redirect()->route('Income.index')->with('success', 'Thu nhập đã được thêm.');
    }

    public function show(Income $income)
    {
        return view('Income.show', compact('income'));
    }

    public function edit(Income $income)
    {
        $categories = IncomeCategory::all();
        return view('Income.edit', compact('income', 'categories'));
    }

    public function update(Request $request, Income $income)
    {
        $request->validate([
            'description' => 'nullable|string|max:255',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
            'income_category_id' => 'required|exists:income_categories,id',
        ]);

        $income->update($request->all());

        return redirect()->route('Income.index')->with('success', 'Thu nhập đã được cập nhật.');
    }

    public function destroy(Income $income)
    {
        $income->delete();
        return redirect()->route('Income.index')->with('success', 'Thu nhập đã được xoá.');
    } 

}
```
* IncomeCategoryController
```markdown
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncomeCategory;

class IncomeCategoryController extends Controller
{
    public function index()
    {
        $categories = IncomeCategory::withCount('incomes')->get();
        return view('IncomeCategory.index', compact('categories'));
    }

    public function create()
    {
        return view('IncomeCategory.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        IncomeCategory::create($request->only('name'));

        return redirect()->route('IncomeCategory.index')->with('success', 'Đã thêm danh mục.');
    }

    public function show(IncomeCategory $incomeCategory)
    {
        $incomeCategory->load('incomes');
        return view('IncomeCategory.show', compact('incomeCategory'));
    }

    public function edit(IncomeCategory $incomeCategory)
    {
        return view('IncomeCategory.edit', compact('incomeCategory'));
    }

    public function update(Request $request, IncomeCategory $incomeCategory)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $incomeCategory->update($request->only('name'));

        return redirect()->route('IncomeCategory.index')->with('success', 'Đã cập nhật.');
    }

    public function destroy(IncomeCategory $incomeCategory)
    {
        $incomeCategory->delete();
        return redirect()->route('IncomeCategory.index')->with('success', 'Đã xoá danh mục.');
    }
}
```
## Project đảm bảo các yêu cầu security
```markdown
@csrf @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Mô tả</label>
                        <input type="text" name="description" class="form-control" value="{{ old('description', $expense->description) }}">
                    </div>
```
* Có bảo mật XSS và CSRF: Laravel sử dụng token CSRF tự động để bảo vệ form khỏi bị gửi từ site bên ngoài

                          Laravel sử dụng {{ }} (escaped output), tự động chuyển ký tự nguy hiểm sang HTML entity

