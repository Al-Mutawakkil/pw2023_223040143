<?php
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= (10 - $i); $j++) {
        echo " ";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "$k ";
    }
    echo "<br>";
}
?>