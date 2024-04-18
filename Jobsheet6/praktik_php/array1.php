
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
            $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

            echo $Listdosen[2] . "<br>";
            echo $Listdosen[0] . "<br>";
            echo $Listdosen[1] . "<br>";

            echo "<br>Menampilkan Array dengan perulangan foreach:<br>";
            foreach ($Listdosen as $dosen) {
                echo $dosen . "<br>";
            }

            echo "<br>Menampilkan Array dengan perulangan for:<br>";
            for ($i = 0; $i < count($Listdosen); $i++) {
                echo $Listdosen[$i] . "<br>";
            }

            echo "<br>Menampilkan Array dengan perulangan while:<br>";
            $i = 0;
            while ($i < count($Listdosen)) {
                echo $Listdosen[$i] . "<br>";
                $i++;
            }
        ?>
    </body>
</html>