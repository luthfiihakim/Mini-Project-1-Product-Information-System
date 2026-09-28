# Mini Project 1: Product Information System

Sistem informasi produk sederhana berbasis PHP.

## Arsitektur

- Data Layer: products.php, berisi data produk dalam multidimensional array
- Processing Layer: functions.php, berisi hitungTotalNilaiStok() dan isStokKritis()
- Presentation Layer: index.php, menggabungkan file dengan require_once dan merender tabel dengan foreach

## Fitur

- Menampilkan daftar produk dalam bentuk tabel
- Menghitung total nilai aset gudang (harga x stok)
- Baris produk dengan stok kritis (< 3) diberi warna berbeda

## Cara Menjalankan

1. Install XAMPP dan nyalakan Apache
2. Salin folder project ke C:\xampp\htdocs
3. Buka http://localhost/mini-project-1/index.php di browser

## Author

Luthfi Hakim