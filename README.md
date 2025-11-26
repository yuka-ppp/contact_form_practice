# contact_form_practice

# お問い合わせフォーム(確認テスト用) このREADMEは環境構築のため原田侑佳が準備したものです。


## 環境構築
### Dockerビルド
- git@github.com:yuka-ppp/contact_form_practice.git
- docker-compose up -d --build

### Laravel環境構築
- docker-compose exec php bash
- composer install
- cp .env.example .env , 環境変数を適宜変更
- php artisan key:generate
- php artisan migrate
- php artisan db:seed

## .env設定
- DB_CONNECTION=mysql
- DB_HOST=mysql
- DB_PORT=3306
- DB_DATABASE=laravel_db
- DB_USERNAME=laravel_user
- DB_PASSWORD=laravel_pass


## 開発環境
  - お問い合わせ画面：http://localhost/  
  - ユーザー登録: http://localhost/register  
  - phpMyAdmin：http://localhost:8080/

## 使用技術(実行環境)
- PHP 8.2.11
- Laravel 8.83.8
- jquery 3.7.1.min.js
- MySQL 8.0.26
- nginx 1.21.1

## ER図

![ER図]("https://github.com/user-attachments/assets/7396f08a-d434-4498-8ee2-e26d3b9d5542" /)