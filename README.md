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

```markdown
```php
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
 

