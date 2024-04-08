<?php

$nilai_siswa = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96);

sort($nilai_siswa);

$nilai_siswa = array_slice($nilai_siswa, 2, -2);
$total_nilai = array_sum($nilai_siswa);
$jumlah_siswa = count($nilai_siswa);
$rata_rata = $total_nilai / $jumlah_siswa;

echo "Daftar Nilai Siswa: " . implode(", ", $nilai_siswa) . "\n";
echo "<br><br>";

echo "Total Nilai Setelah Mengabaikan 2 Nilai Tertinggi dan 2 Nilai Terendah: " . $total_nilai . "\n";
echo "<br><br>";

echo "Jumlah Siswa: " . $jumlah_siswa . "\n";
echo "<br><br>";

echo "Rata-rata Nilai: " . $rata_rata . "\n";
?>