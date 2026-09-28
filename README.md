# Mini Project 1: Product Information System

Sistem informasi produk sederhana berbasis PHP yang menampilkan data produk dalam tabel HTML, menghitung total nilai aset gudang, dan menyorot produk dengan stok kritis.

## Arsitektur

Project ini memisahkan kode menjadi tiga layer:

| Layer | File | Fungsi |
|-------|------|--------|
| Data Layer | `products.php` | Menyimpan data produk dalam multidimensional array (ID, Nama, Kategori, Harga, Stok, Deskripsi) |
| Processing Layer | `functions.php` | Berisi `hitungTotalNilaiStok()` dan `isStokKritis()` |
| Presentation Layer | `index.php` | Menggabungkan semua file dengan `require_once` dan merender tabel HTML dengan `foreach` |

## Fitur

- Menampilkan daftar produk dalam bentuk tabel
- Menghitung total nilai aset gudang (harga x stok)
- Baris produk dengan stok kritis (< 3) diberi warna berbeda

## Struktur Folder

```
mini-project-1/
├── index.php
├── products.php
├── functions.php
└── README.md
```

## Cara Menjalankan

1. Install [XAMPP](https://www.apachefriends.org/) dan nyalakan **Apache**.
2. Salin folder project ke `C:\xampp\htdocs\`.
3. Buka browser dan akses:
   ```
   http://localhost/mini-project-1/index.php
   ```

## Teknologi

- PHP
- HTML & CSS
- Git & GitHub

## Author

Luthfi Hakim