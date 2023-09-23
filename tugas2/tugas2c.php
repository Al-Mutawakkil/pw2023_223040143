<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        th, td {
        border: 1px solid black;
        }
    </style>
</head>
<body>
   <table cellpadding="10" cellspacing="0">
   <?php
    $column = 10; 
    for ($i = $column; $i >= 1; $i--) {
        echo "<tr>";
        for ($j = 1; $j <= $i; $j++) {
            echo "<td>$j</td>";
        }
        echo "</tr>";
    }
    ?>
   </table>
</body>
</html>