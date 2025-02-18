# RBAC Laravel

Proyek ini menggunakan beberapa library dan package untuk mengelola Role-Based Access Control (RBAC) di Laravel.

## Teknologi yang Digunakan
- Laravel Jetstream
- Laravel Spatie Permissions
- ChartJs

## Cara Menjalankan Proyek

1. **Clone Repository**  
   Jalankan perintah berikut untuk meng-clone repository:
   ```sh
   git clone https://github.com/wildan190/test-app.git
   ```

2. **Masuk ke Direktori Proyek**  
   ```sh
   cd test-app
   ```

3. **Install Dependencies**  
   Jalankan perintah berikut untuk menginstal dependensi yang diperlukan:
   ```sh
   composer update
   ```

4. **Konfigurasi Environment**  
   Ubah nama file `.env.example` menjadi `.env`:
   ```sh
   cp .env.example .env
   ```

   Kemudian, jalankan perintah berikut untuk menghasilkan application key:
   ```sh
   php artisan key:generate
   ```

5. **Koneksikan Database**  
   Edit file `.env` dan sesuaikan konfigurasi database:
   ```ini
   DB_CONNECTION=pgsql
   DB_HOST=127.0.0.1
   DB_PORT=5432
   DB_DATABASE=database_name
   DB_USERNAME=db_user
   DB_PASSWORD=db_password
   ```

6. **Migrasi dan Seeding Database**  
   Jalankan perintah berikut untuk menjalankan migrasi dan seeding:
   ```sh
   php artisan migrate --seed
   ```
7. **Install NPM**
   Jalankan perintah ``npm install`` dan kemudian ``npm run build`` setelah itu ``npm run dev``

8. **Menjalankan Proyek**  
   Buka terminal yang lain dan Jalankan perintah berikut untuk menjalankan aplikasi:
   ```sh
   php artisan octane:frankenphp
   ```
9. **Akun User**
   ```sh
   Admin : admin@example.com | password
   Manager : manager@example.com | password
   User : user@example.com | password
   ```

