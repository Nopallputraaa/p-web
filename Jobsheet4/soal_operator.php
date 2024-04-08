<?php
$kursi = 45;
$ditempati = 28;
$kosong = $kursi - $ditempati;
$persen = $kosong / 45 * 100;
echo "Jumlah Kursi Kosong: {$kosong}<br>";
echo "Sebesar " . number_format((float)$persen,1 ,'.','') . "% \n";
?>