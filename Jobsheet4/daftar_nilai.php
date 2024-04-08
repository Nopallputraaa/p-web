<?php

$siswa = array(
    "Alice" => 85,
    "Bob" => 92,
    "Charlie" => 78,
    "David" => 64,
    "Eva" => 90
);

$rata_rata_kelas = array_sum($siswa) / count($siswa);

echo "Rata-rata nilai kelas: $rata_rata_kelas\n";
echo "<br>";

echo "Daftar nilai siswa di atas rata-rata kelas:\n";
foreach ($siswa as $nama => $nilai) {
    if ($nilai > $rata_rata_kelas) {
        echo "$nama: $nilai\n";
    }
}
?>