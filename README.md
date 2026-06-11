## 👤 Identitas Mahasiswa
- *Nama:* Hanafi Rizki Fikrillag
- **NRP:* 5124500007
- *Kelas:* MMB A 2024
- *Program Studi:* D3 Teknologi Multimedia Broadcasting
- *Kampus:* Politeknik Elektronika Negeri Surabaya (PENS)

  # Portfolio Hanafi

## Identitas Mahasiswa

* **Nama:** Hanafi Rizki Fikrillah
* **NIM:** 5124500007
* **Kelas:** MMB-A

## Deskripsi

Project Portfolio Hanafi merupakan website portfolio pribadi berbasis Laravel yang dikembangkan sebagai tugas Pemrograman Web Lanjut. Website ini berfungsi untuk menampilkan profil, pengalaman, serta daftar project yang pernah dikerjakan. Selain itu, tersedia dashboard administrator yang memungkinkan pengelolaan data project melalui fitur CRUD (Create, Read, Update, Delete).

## Fitur Utama

### Halaman Portfolio

* Menampilkan profil pribadi
* Menampilkan informasi tentang diri
* Menampilkan daftar project
* Tombol Download CV
* Tombol kontak WhatsApp

### Manajemen Project

* Menambah project baru
* Mengedit project
* Menghapus project
* Menampilkan daftar project

### Authentication

* Login pengguna
* Dashboard setelah login
* Proteksi halaman admin

### User Interface

* Responsive Design
* Tampilan modern menggunakan Tailwind CSS
* Navigasi yang mudah digunakan

## Teknologi yang Digunakan

* PHP 8+
* Laravel
* Blade Template Engine
* Tailwind CSS
* SQLite Database
* Git
* GitHub

## Struktur Project

```text
Desain-Web/
├── app/
├── bootstrap/
├── config/
├── database/
│   └── migrations/
├── public/
├── resources/
│   └── views/
├── routes/
│   └── web.php
├── storage/
├── tests/
├── artisan
├── composer.json
├── package.json
├── .env.example
└── README.md
```

## Cara Menjalankan Project

Clone repository:

```bash
git clone https://github.com/hanafi-design/Desain-Web.git
cd Desain-Web
```

Install dependency:

```bash
composer install
```

Salin file environment:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

Jalankan migrasi database:

```bash
php artisan migrate
```

Jalankan server Laravel:

```bash
php artisan serve
```

Akses aplikasi melalui browser:

```text
http://127.0.0.1:8000
```

## Repository GitHub

Repository project:

https://github.com/hanafi-design/Desain-Web

## Checklist Repository

* [x] README.md tersedia di root repository
* [x] Identitas Mahasiswa tersedia di awal README
* [x] Repository tersimpan di GitHub
* [x] Dosen telah diundang sebagai collaborator

## Checklist Struktur Laravel

* [x] composer.json
* [x] artisan
* [x] Folder app/
* [x] routes/web.php
* [x] Folder resources/views/
* [x] Folder database/migrations/
* [x] .env.example
* [x] README.md

## Status Project

✅ Project selesai dikembangkan

✅ Authentication berhasil diimplementasikan

✅ CRUD Project berhasil diimplementasikan

✅ Halaman Portfolio berhasil dibuat

✅ Dashboard Admin berhasil dibuat

✅ Repository GitHub aktif dan dapat diakses

## Pengembang

Hanafi Rizki Fikrillah
NIM 5124500007
MMB-A

