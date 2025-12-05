# 📝 環境構築（Setup Guide）

## 🐳 Docker ビルド
git clone git@github.com:shotakayama2-tech/inquiry-form.git
cd inquiry-form

---

## 🚀 Laravel 環境構築
docker-compose up -d
docker-compose exec app composer install
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan migrate --seed
docker-compose exec app npm run dev

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
