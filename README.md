<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


# chat-message

Đây là một project về ứng dụng chat message sử dụng package talk của laravel 

<p style="color:blue;"> #cách cài đặt</p>

Đầu tiên , bạn phải cài đặt xampp và composer .
Sau đó ,
 - chạy lệnh composer update để cài đặt 
 - cấu hình lại file .env và docker-composer.yml bằng cách gõ lệnh cp .env.example .env   và lệnh cp docker-composer.yml.example docker-composer.yml
 - chạy câu lệnh php artisan migrate đề thêm bảng vào csdl 
 - Thêm dữ liệu vào bảng user : php artisan db:seed
 - Cuối cùng chạy câu lệnh php artisan serve và chạy theo đường dẫn http://127.0.0.1:8000
 - Đăng nhập với tài khoản : talk@example.com và mk : 123456.
 
