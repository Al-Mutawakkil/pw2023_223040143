<?php
function hitungLuasLingkaran($jariJari) {
    $luas = M_PI * pow($jariJari, 2);
    return $luas;
}

function hitungKelilingLingkaran($jariJari) {
    $keliling = 2 * M_PI * $jariJari;
    return $keliling;
}

$jariJari = 10;
$luas = hitungLuasLingkaran($jariJari);
$keliling = hitungKelilingLingkaran($jariJari);

echo "Luas Lingkaran dengan jari-jari $jariJari adalah: $luas <br>";
echo "<hr>";
echo "Keliling Lingkaran dengan jari-jari $jariJari adalah: $keliling";
?>
