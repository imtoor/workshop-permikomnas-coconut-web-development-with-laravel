![Laravel Logo](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg)

# Open Class Projects: Permikomnas X Coconut

Dalam workshop ini project yang digunakan adalah Data Mahasiswa. Project sederhana berupa data mahasiswa dimana disini kita akan belajar tentang authentication(Login & Logout), Migration, dan CRUD(Create, Read, Update, Delete) pada framework Laravel.


## Screenshot Project

- Login
![Login](https://ik.imagekit.io/5bmuwhm2n/workshop/openclass%20coconut%20x%20permikomnas%20web%20development%20with%20laravel/Screenshot%202024-12-29%20at%2015.57.04.png?updatedAt=1735459913755)

- Dashboard
![Dashboard](https://ik.imagekit.io/5bmuwhm2n/workshop/openclass%20coconut%20x%20permikomnas%20web%20development%20with%20laravel/Screenshot%202024-12-29%20at%2015.57.14.png?updatedAt=1735459913635)

- Data Mahasiswa
![Data Mahasiswa](https://ik.imagekit.io/5bmuwhm2n/workshop/openclass%20coconut%20x%20permikomnas%20web%20development%20with%20laravel/Screenshot%202024-12-29%20at%2015.58.57.png?updatedAt=1735459913867)

- Data Mahasiswa - Form
![Data Mahasiswa - Form](https://ik.imagekit.io/5bmuwhm2n/workshop/openclass%20coconut%20x%20permikomnas%20web%20development%20with%20laravel/Screenshot%202024-12-29%20at%2016.00.24.png?updatedAt=1735459913705)

## Panduan Cara Setup Project

Berikut adalah langkah - langkah untuk menjalankan project.

### Kebutuhan Awal
Sebelum mulai, pastikan ini sudah terinstall di laptop / pc kamu:

- PHP Versi 8.0 ke atas (Cek versi php menggunakan perintah php -v pada terminal)
- [Composer](https://getcomposer.org/download/) (Dependency manager for PHP) telah terinstall
- MySQL Database or any other database supported by Laravel
- [Node.js and npm](https://nodejs.org/en/download) (For managing frontend assets, optional)

Untuk pengguna windows kamu dapat langsung menginstall php dan mysql nya menggunakan [XAMPP](https://www.apachefriends.org/download.html).

### Langkah - langkah setup project
#### 1. Clone Repository
Clone repository ini di laptop / pc kamu:
```bash
git clone https://github.com/imtoor/workshop-permikomnas-coconut-web-development-with-laravel.git
```

#### 2. Masuk ke dalam folder project yang telah di clone
```bash
cd workshop-permikomnas-coconut-web-development-with-laravel
```

#### 3. Install Dependencies
Instal semua dependensi PHP menggunakan Composer:
```bash
composer install
```
atau jika mendownload **composer.phar** maka perintah nya adalah
```bash
php ../composer.phar install
```

### 4. Set Up the Environment File
Agar project dapat berjalan dibutuhkan file konfigurasi yaitu .env maka dari itu kita akan membuat file nya dengan cara copy dari file yang telah disediakan menggunakan perintah berikut:
```bash
cp .env.example .env
```

Lalu buka file **.env** lalu edit atau sesuaikan pada bagian berikut ini:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_mahasiswa
DB_USERNAME=[nama_user_mysql]
DB_PASSWORD=[password_mysql]
```
Pastikan nama database db_mahasiswa sudah ada pada phpmyadmin kalian. Jika belum maka buatlah terlebih dahulu

#### 4. Generate Application Key
Jalankan perintah berikut ini untuk generate application key pada file .env:
```bash
php artisan key:generate
```

#### 5. Jalankan migrasi
Jalankan migrasi agar tabel - tabel yang diperlukan pada aplikasi agar berjalan dibuat. Gunakan perintah berikut ini:
```bash
php artisan migrate
```

#### 7. Jalankan aplikasi
Jalankan perintah berikut untuk menjalankan server aplikasi:
```bash
php artisan serve
```
Tunggu sebentar hingga tampilan di terminal menjadi seperti ini 
![Run Laravel](https://ik.imagekit.io/5bmuwhm2n/workshop/openclass%20coconut%20x%20permikomnas%20web%20development%20with%20laravel/Screenshot%202024-12-30%20at%2016.32.36.png?updatedAt=1735547580665)

Jika sudah maka silahkan buka browser kamu misal google chrome atau firefox dll lalu ketikkan pada url browser yaitu:
```arduino
http://localhost:8000
```
atau
```arduino
http://127.0.0.1:8000
```

Aplikasi seharusnya sudah berjalan dan kamu dapat langsung mempelajari fitur - fitur yang ada.

### Selamat Belajar 🙂