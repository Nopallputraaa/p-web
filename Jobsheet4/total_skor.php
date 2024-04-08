<?php
$skor = [100, 200, 250, 300];

$totalSkor = 0;

foreach ($skor as $angka) {
    $totalSkor += $angka;
}

echo "Total skor pemain adalah $totalSkor <br>";
echo "Apakah pemain mendapat hadiah tambahan? ";
$hadiah = ($totalSkor > 500)? "Ya" : "Tidak";
echo $hadiah;
?>