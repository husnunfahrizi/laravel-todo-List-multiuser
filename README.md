# 📝 Inget.in - Laravel Multi-User To-Do List App

Inget.in adalah aplikasi manajemen tugas (to-do list) berbasis Laravel yang mendukung banyak pengguna dan dilengkapi fitur-fitur pintar untuk pengelolaan tugas harian. Dibuat dengan UI modern menggunakan Tailwind CSS dan struktur backend Laravel 12 yang solid.

## 🎯 Fitur Utama

- 🔐 **Autentikasi & Peran Pengguna**  
  Mendukung login dan logout dengan sistem peran (`admin` & `user`).

- 👥 **Delegasi Tugas ke Pengguna Lain**  
  Admin dapat menetapkan tugas ke user tertentu.

- 🗂️ **Kategori Status Tugas**  
  Tugas dikategorikan berdasarkan status:  
  `Penting Sekali`, `Menengah`, `Tidak Harus`.

- 📆 **Filter Deadline 3 Hari ke Depan**  
  Hanya menampilkan tugas yang memiliki tenggat waktu dalam 3 hari ke depan.

- ✅ **Status Selesai / Belum Selesai**  
  Indikator visual untuk menandai tugas yang telah diselesaikan.

- 🎨 **UI Elegan & Modern**  
  Menggunakan Tailwind CSS, animasi halus, dark mode-ready, dan gaya glassmorphism.

## 🧱 Teknologi

- Laravel 12.x
- Tailwind CSS 3.x
- Blade Templating
- MySQL / MariaDB
- Auth Middleware Laravel

## 📸 Tampilan

<img width="1903" height="870" alt="Cuplikan layar 2025-08-03 003926" src="https://github.com/user-attachments/assets/59166e46-0e6b-43b9-8e70-c2eb471c0487" />


## ⚙️ Instalasi Lokal

```bash
git clone https://github.com/husnunfahrizi/laravel-todo-List-multiuser.git
cd Inget.in

# Install dependency
composer install
npm install && npm run dev

# Salin .env dan atur konfigurasi
cp .env.example .env
php artisan key:generate

# Buat database & migrasi
php artisan migrate

# Jalankan server
php artisan serve
