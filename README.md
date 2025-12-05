# 📝 環境構築（Setup Guide）

## 🐳 Docker ビルド
git clone git@github.com:shotakayama2-tech/inquiry-form.git
cd inquiry-form

---

## 🚀 Laravel 環境構築（まず最初に実行）
docker-compose up -d --build
docker-compose ps
docker-compose exec php bash
composer install
php artisan key:generate
php artisan migrate --seed
npm install
npm run dev

---

## 🔧 .env の設定（必ず変更）
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass

---

## 🛠 使用技術（実行環境）
- PHP: 8.x
- Laravel: 10.x
- MySQL: 8.x
- Composer: 2.x
- Node.js: 18.x
- Docker / Docker Compose

---

## 🧑‍💻 開発環境（アクセス URL）
- お問い合わせフォーム  
  http://localhost/contact

- ユーザー登録  
  http://localhost/register

- phpMyAdmin  
  http://localhost:8080/

---