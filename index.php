<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/products.php';
require_once __DIR__ . '/functions.php';

$total = hitungTotalNilaiStok($products);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Product Information System</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #999; padding: 8px; text-align: left; }
        th { background: #2b6cb0; color: white; }
        .kritis { background: #f8d7da; }
    </style>
</head>
<body>
    <h1>Daftar Produk</h1>
    <table>
        <tr>
            <th>ID</th><th>Nama</th><th>Kategori</th>
            <th>Harga</th><th>Stok</th><th>Deskripsi</th>
        </tr>
        <?php foreach ($products as $p): ?>
        <tr class="<?= isStokKritis($p['stok']) ? 'kritis' : '' ?>">
            <td><?= $p['id'] ?></td>
            <td><?= $p['nama'] ?></td>
            <td><?= $p['kategori'] ?></td>
            <td>Rp<?= number_format($p['harga'], 0, ',', '.') ?></td>
            <td><?= $p['stok'] ?></td>
            <td><?= $p['deskripsi'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <p><strong>Total Nilai Aset Gudang: Rp<?= number_format($total, 0, ',', '.') ?></strong></p>
</body>
</html>