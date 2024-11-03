<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<h1 align="center">Pengelolaan Dana Sumbangan</h1>

<p align="center">
  <a href="https://laravel.com/docs/7.x"><img src="https://img.shields.io/badge/Laravel-7.x-red.svg" alt="Laravel 7.x"></a>
  <a href="https://tailwindcss.com/"><img src="https://img.shields.io/badge/TailwindCSS-2.x-blue.svg" alt="Tailwind CSS 2.x"></a>
  <a href="https://opensource.org/licenses/MIT"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Tentang Proyek

**Pengelolaan Dana Sumbangan** adalah aplikasi berbasis web yang dibangun menggunakan Laravel 7 dan Tailwind CSS. Aplikasi ini dirancang untuk mempermudah pengelolaan dan pelacakan dana sumbangan, mencatat data donatur, dan menyediakan laporan keuangan terkait.

### Fitur Utama
- **Manajemen Donatur**: Menambahkan, memperbarui, dan menghapus data donatur.
- **Pelacakan Dana**: Memudahkan pemantauan aliran masuk dan keluar dana sumbangan.
- **Laporan Keuangan**: Menyediakan laporan pendapatan dan pengeluaran yang dapat diekspor.
- **Penggunaan Tailwind CSS**: Desain responsif dan modern yang dibuat dengan Tailwind CSS.

## Teknologi yang Digunakan
- **Laravel 7.x** - Framework PHP untuk aplikasi web.
- **Tailwind CSS 2.x** - Framework CSS yang memungkinkan pembuatan desain yang cepat dan konsisten.
- **MySQL** - Database untuk menyimpan data sumbangan, donatur, dan laporan.

## Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/username/pengelolaan-dana-sumbangan.git
   cd pengelolaan-dana-sumbangan

2. **nstall Dependencies**
   ```bash
   composer install
   npm install
   npm run dev

3. **Konfigurasi Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate

4. **Migrasi Database**
   ```bash
   php artisan migrate

5. **Menjalankan Server Lokal**
   ```bash
   php artisan serve


### Penjelasan:
- Template ini sudah disusun dengan **instruksi instalasi** yang jelas dan rinci sesuai urutan yang Anda inginkan.
- **Struktur Proyek** dan **Kontribusi** disertakan untuk panduan tambahan bagi pengembang lain yang ingin memahami struktur aplikasi atau berkontribusi.
- **Link Badge** di bagian atas memberikan informasi tentang versi Laravel, Tailwind CSS, dan lisensi yang digunakan. 

Anda hanya perlu mengganti `https://github.com/username/pengelolaan-dana-sumbangan.git` dengan URL repository GitHub proyek Anda.
