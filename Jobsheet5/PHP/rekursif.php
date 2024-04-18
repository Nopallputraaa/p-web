<?php
//for ($i=1; $i <=25; $i++) {
    //echo "Perulangan ke-{$i} <br>";
//}
//function tampilkanHaloDunia() {
    //echo "Halo dunia! <br>";

    //tampilkanHaloDunia();
//}

//tampilkanHaloDunia();

function tampilAngka(int $jumlah , int $indeks= 1){
    echo "perulangan ke-{$indeks} <br>";
    if ($indeks< $jumlah){
    tampilAngka($jumlah , $indeks + 1 );
    }
}

tampilAngka(20);
?>