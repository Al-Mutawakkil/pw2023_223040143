<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            border: 1px solid #000;
        }

        .black {
            background-color: #000;
            color: #fff;
        }

        .white {
            background-color: #fff;
            color: #000;
        }
    </style>
</head>
<body>
    <table>
        <?php
        $rows = 8;
        $cols = 8;

        for ($row = 1; $row <= $rows; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= $cols; $col++) {
                $class = ($row + $col) % 2 == 0 ? "white" : "black";
                echo "<td class='$class'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
