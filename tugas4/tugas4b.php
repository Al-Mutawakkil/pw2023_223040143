<?php
$perangkat_keras = ["Monitor", "Keyboard", "Mouse", "Printer", "Scanner", "Speaker"];

echo "<h3>Macam-macam perangkat keras komputer</h3>";
echo "<ul>";

foreach ($perangkat_keras as $item) {
    echo "<li>$item</li>";
}
echo "</ul>";

array_push($perangkat_keras, "Card Reader", "Modem");
asort($perangkat_keras);
echo "<h3>Macam-macam perangkat keras komputer baru</h3>";
echo "<ul>";

foreach ($perangkat_keras as $item) {
    $isNewItem = in_array($item, ["Card Reader", "Modem"]);
    $style = $isNewItem ? 'font-weight: bold;' : '';
    echo "<li style='$style'>$item</li>";
}
echo "</ul>";
?>
