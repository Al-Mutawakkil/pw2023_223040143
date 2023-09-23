<?php
function tampilkanAngkaTerurut($jumlahAngka) {
    $angka = 1;

    for ($i = 1; $i <= $jumlahAngka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $angka . " ";
            $angka++;
        }
        echo "<br>";
    }
}

$jumlahAngka = 5;
tampilkanAngkaTerurut($jumlahAngka);
?>
