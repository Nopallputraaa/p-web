<?php

$harga_produk = 120000;
$batas_diskon = 100000;
$persentase_diskon = 20;

if ($harga_produk > $batas_diskon) {
    $diskon = ($persentase_diskon / 100) * $harga_produk;
} else {
    $diskon = 0;
}

$total_harga = $harga_produk - $diskon;

echo "Harga Produk: Rp " . number_format($harga_produk, 0, ',', '.') . "\n";
echo "<br>";

echo "Diskon (" . $persentase_diskon . "%): Rp " . number_format($diskon, 0, ',', '.') . "\n";
echo "<br>";

echo "Total Harga Setelah Diskon: Rp " . number_format($total_harga, 0, ',', '.') . "\n";
?>