------------------ Các bước cài đặt source -----------------------
B1 : Tải source về bằng lệnh git " git clone https://github.com/minhtran2401/DoAnTotNghiep.git "
B2 : Giải nén bỏ source vào thư mục xampp
B3 : Tạo database mới và kết nối với dự án ở .env
B4 : Chạy "composer install" & "composer update"
B5 : Chạy php "artisan migrate:refresh" để tạo bảng trong database
B6 : Import database vào.