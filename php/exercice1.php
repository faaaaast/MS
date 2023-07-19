<!DOCTYPE html>
<html>
<head>
    <title>Table de multiplication</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 5px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h2>Exercice 1</h2>
    <table>
        <tr>
            <th></th>
            <?php
            for ($i = 1; $i <= 150; $i += 2) {          // itérer de 1 à 150 avec un pas de 2 à chaque itération.
                echo $i . " ";
            }
            ?>

<br><br>

            <?php
            for ($i = 0; $i < 500; $i++) {
                echo "<br>Je dois faire des sauvegardes régulières de mes fichiers<br>";        //itérer de 0 à 499.
            }

            for ($i = 1; $i <= 9; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>


        <br><br>

        <?php

        
        for ($i = 1; $i <= 9; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            for ($j = 1; $j <= 9; $j++) {           //une table de multiplication de 1 à 9
                $result = $i * $j;
                echo "<td>$result</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>