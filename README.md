# RoyalHeart — Project Kelompok

Repository ini merupakan project bersama kelompok untuk pengembangan website **RoyalHeart** menggunakan **PHP Laravel**.

Semua anggota kelompok menggunakan repository ini sebagai source code utama. Pastikan selalu mengambil perubahan terbaru sebelum mulai mengerjakan project.

## 🔗 Repository

**GitHub:**  
https://github.com/misteri-00/royalheart

---

## 🛠️ Teknologi

- PHP
- Laravel
- Composer
- MySQL
- Blade
- Bootstrap
- JavaScript
- Git & GitHub

---

# 🚀 Instalasi Project

## 1. Clone Repository

Buka terminal dan jalankan:

```bash
git clone https://github.com/misteri-00/royalheart.git
```

Masuk ke folder project:

```bash
cd royalheart
```

---

## 2. Install Dependency Laravel

Jalankan:

```bash
composer install
```

Jika project menggunakan dependency JavaScript:

```bash
npm install
```

---

## 3. Membuat File `.env`

Jangan membuat file `.env` sendiri dari awal.

Copy `.env.example` menjadi `.env`.

### Windows

```bash
copy .env.example .env
```

### Linux / macOS

```bash
cp .env.example .env
```

Kemudian jalankan:

```bash
php artisan key:generate
```

---

# 🗄️ Database

Buat database MySQL terlebih dahulu.

Contoh nama database:

```text
royalheart
```

Kemudian buka file `.env` dan sesuaikan:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=royalheart
DB_USERNAME=root
DB_PASSWORD=
```

Sesuaikan `DB_USERNAME` dan `DB_PASSWORD` dengan konfigurasi MySQL di komputer masing-masing.

---

## 4. Migration Database

Setelah database dibuat:

```bash
php artisan migrate
```

Jika project memiliki seeder:

```bash
php artisan db:seed
```

Atau:

```bash
php artisan migrate --seed
```

---

# ▶️ Menjalankan Project

Jalankan Laravel:

```bash
php artisan serve
```

Kemudian buka:

```text
http://127.0.0.1:8000
```

Jika menggunakan Vite, jalankan pada terminal kedua:

```bash
npm run dev
```

Jadi:

### Terminal 1

```bash
php artisan serve
```

### Terminal 2

```bash
npm run dev
```

---

# 📁 Struktur Project

Struktur utama project:

```text
royalheart/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   └── Models/
│
├── database/
│   ├── migrations/
│   └── seeders/
│
├── public/
│   ├── css/
│   ├── js/
│   └── images/
│
├── resources/
│   └── views/
│       ├── home.blade.php
│       │
│       └── layouts/
│           ├── app.blade.php
│           ├── head.blade.php
│           ├── header.blade.php
│           ├── footer.blade.php
│           └── script.blade.php
│
├── routes/
│   └── web.php
│
├── .env.example
├── artisan
├── composer.json
└── README.md
```

---

# 🎨 Struktur Blade

Project menggunakan `layouts/app.blade.php` sebagai layout utama.

Strukturnya:

```text
layouts/app.blade.php
│
├── head.blade.php
├── header.blade.php
├── @yield('content')
├── footer.blade.php
└── script.blade.php
```

Untuk membuat halaman baru gunakan:

```blade
@extends('layouts.app')

@section('content')

    <!-- Isi halaman -->

@endsection
```

Contoh:

```text
resources/views/
├── home.blade.php
├── about.blade.php
├── causes.blade.php
├── events.blade.php
└── contact.blade.php
```

---

# 🌿 Workflow Git untuk Kelompok

## ⚠️ Sebelum mulai coding

Selalu ambil perubahan terbaru:

```bash
git pull origin main
```

Setelah itu baru mulai mengerjakan bagian masing-masing.

---

# 💻 Setelah selesai coding

Cek perubahan:

```bash
git status
```

Tambahkan perubahan:

```bash
git add .
```

Buat commit:

```bash
git commit -m "deskripsi perubahan"
```

Contoh:

```bash
git commit -m "Tambah halaman home"
```

Kemudian push:

```bash
git push origin main
```

---

# 🔄 Alur Kerja Harian

### Saat mulai bekerja

```bash
git pull origin main
```

### Setelah selesai bekerja

```bash
git status
git add .
git commit -m "deskripsi perubahan"
git push origin main
```

Contoh lengkap:

```bash
git pull origin main

# mengerjakan project...

git status
git add .
git commit -m "Tambah halaman about"
git push origin main
```

---

# ⚠️ PENTING — Jangan Push `.env`

File `.env` berisi informasi sensitif seperti:

- Password database
- API key
- Application key
- Konfigurasi pribadi

**Jangan pernah meng-upload `.env` ke GitHub.**

Gunakan:

```text
.env.example
```

sebagai template konfigurasi.

---

# ⚠️ Jika Terjadi `git push rejected`

Jika muncul:

```text
rejected
```

Jangan langsung menggunakan:

```bash
git push --force
```

Ambil perubahan terbaru terlebih dahulu:

```bash
git pull --rebase origin main
```

Kemudian:

```bash
git push origin main
```

Jika terjadi conflict, selesaikan conflict terlebih dahulu.

Setelah selesai:

```bash
git add .
git rebase --continue
git push origin main
```

---

# 👥 Pembagian Pekerjaan

Sebelum mengubah file yang sama dengan anggota lain, komunikasikan terlebih dahulu.

Contoh pembagian:

```text
Home
├── HomeController
└── home.blade.php

About
├── AboutController
└── about.blade.php

Causes
├── CauseController
└── causes.blade.php

Events
├── EventController
└── events.blade.php

Contact
├── ContactController
└── contact.blade.php
```

Usahakan setiap anggota mengerjakan bagian yang berbeda agar mengurangi kemungkinan Git conflict.

---

# 🧩 Membuat Controller

Gunakan Artisan untuk membuat controller:

```bash
php artisan make:controller HomeController
```

Contoh:

```bash
php artisan make:controller AboutController
php artisan make:controller CauseController
php artisan make:controller EventController
php artisan make:controller ContactController
```

---

# 🧩 Membuat Model dan Migration

Gunakan:

```bash
php artisan make:model NamaModel -m
```

Contoh:

```bash
php artisan make:model Cause -m
```

---

# 📌 Perintah Git yang Sering Digunakan

### Cek status

```bash
git status
```

### Ambil perubahan terbaru

```bash
git pull origin main
```

### Melihat perubahan

```bash
git diff
```

### Tambahkan perubahan

```bash
git add .
```

### Commit

```bash
git commit -m "pesan commit"
```

### Push

```bash
git push origin main
```

### Melihat branch

```bash
git branch
```

---

# 🎯 Quick Start

Untuk anggota kelompok yang baru pertama kali mengambil project:

```bash
git clone https://github.com/misteri-00/royalheart.git
cd royalheart

composer install

copy .env.example .env

php artisan key:generate

npm install

php artisan migrate

npm run dev
```

Buka terminal baru:

```bash
php artisan serve
```

Kemudian buka:

```text
http://127.0.0.1:8000
```

---

# 📌 Untuk Anggota Kelompok

Sebelum mulai coding:

```bash
git pull origin main
```

Setelah selesai:

```bash
git add .
git commit -m "jelaskan perubahan"
git push origin main
```

**Jangan melakukan `git push --force` ke branch `main`.**

Jika akan melakukan perubahan besar pada struktur database, migration, layout utama, atau file yang sedang dikerjakan anggota lain, komunikasikan terlebih dahulu dengan kelompok.

---

## 👨‍💻 RoyalHeart Team

**Repository:**  
https://github.com/misteri-00/royalheart

**Branch utama:** `main`

Project ini dikembangkan bersama oleh anggota kelompok.
