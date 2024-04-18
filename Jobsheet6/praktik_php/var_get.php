
<?php

$nama = @$_GET['nama']; 
// Tanda @ digunakan agar tidak ada peringatan error
$usia = @$_GET['usia'];

echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";
?>