<?php
function hitungTotalNilaiStok($products) {
    $total = 0;
    foreach ($products as $p) {
        $total += $p["harga"] * $p["stok"];
    }
    return $total;
}

function isStokKritis($stok) {
    return $stok < 3;
}