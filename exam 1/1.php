<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            width: 50px;
            height: 50px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Chessboard</h2>
    <table border ="1">
        <?php
        $rows = 8; // Number of rows
        $cols = 8; // Number of columns

        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $cols; $j++) {
                // Check if the cell should be black or white
                $class = ($i + $j) % 2 == 0 ? "white" : "black";
                echo "<td class='$class'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
