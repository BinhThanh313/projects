# Web Đọc Sách Trực Tuyến

## Công Nghệ Sử Dụng

- **Framework**: Laravel  
- **Giao diện**: CSS, Bootstrap  
- **Web Server**: XAMPP  
- **Cơ sở dữ liệu**: MySQL  

## Chức Năng Hệ Thống

Hệ thống đọc sách trực tuyến có thể được truy cập bởi hai loại người dùng: **Người đọc (Reader)** và **Quản trị viên (Admin)**.

### Người Đọc
- Có thể xem trang chủ.  
- Có thể đọc tất cả sách.  
- Có thể tìm kiếm sách theo tiêu đề, tóm tắt, tác giả.  

### Quản Trị Viên
- Có thể đăng nhập hoặc đăng xuất.  
- Có thể truy cập bảng điều khiển quản trị.  
- Có thể tạo, cập nhật và xóa sách.  
- Có thể thêm, cập nhật và xóa chương sách.  

## Cấu Trúc Cơ Sở Dữ Liệu

Hệ thống sử dụng cơ sở dữ liệu quan hệ để lưu trữ thông tin về sách, người dùng và danh sách sách đã lưu.

### Các Bảng Chính
- **truyen**: Lưu trữ thông tin về từng bộ truyện như tên, tác giả, tóm tắt, hình ảnh bìa, danh mục thể loại, và trạng thái hiển thị.  
- **danhmuc**: Lưu danh mục thể loại truyện, giúp phân loại truyện để người dùng dễ tìm kiếm hơn.  
- **chapter**: Lưu thông tin về các chương của từng truyện.  
- **users**: Quản lý tài khoản người dùng.  

### Các Bảng Hệ Thống
- **failed_jobs**: Lưu lại các công việc bị lỗi trong hàng đợi (queue) của Laravel.  
- **migrations**: Ghi lại các thay đổi trong cơ sở dữ liệu khi sử dụng hệ thống migration của Laravel.  
- **password_resets**: Lưu token đặt lại mật khẩu khi người dùng quên mật khẩu.  
- **personal_access_tokens**: Dùng để lưu token truy cập nếu hệ thống có API hoặc đăng nhập không cần mật khẩu.  
###
- **link web**:http://127.0.0.1:8000
- **repo**: https://github.com/BinhThanh313/projects
- **Link demo**: https://youtu.be/zH6SBGWuwz8