## Mini Project 1: Product Information System (Desain)

### Tujuan
Merancang blueprint sistem manajemen data informasi produk berbasis konsep teori yang telah dipelajari.

### Arsitektur Desain Konseptual

#### 1. Data Layer
- File: `products.php`
- Menyimpan data produk dalam multidimensional array
- Field: ID, Nama, Kategori, Harga, Stok, Deskripsi

#### 2. Processing Layer
- File: `functions.php`
- Fungsi `hitungTotalNilaiStok()` untuk menghitung nilai aset gudang
- Logika conditional untuk menyorot warna baris tabel jika stok kritis (< 3)

#### 3. Presentation Layer
- File: `index.php`
- Menggabungkan semua komponen dengan `require_once`
- Merender data ke tabel HTML menggunakan perulangan `foreach`

### Catatan
Sesi ini hanya berfokus pada perancangan desain (tanpa coding).