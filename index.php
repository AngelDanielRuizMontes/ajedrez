<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajedrez</title>
    <link rel="shortcut icon" href="../../../img/favicon.png" type="image/png" />
    <link href="./css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>
                Ajedrez
            </h1>
            <h2>Movimiento de un Alfil</h2>
        </div>
        <div id="content" class="caja-destacada">

            <?php
            // Recoge la posición del alfil
            if (isset($_POST['posicion'])) {
                $posicion = $_POST['posicion'];
                $x = ord(substr($posicion, 0, 1)) - ord('a');
                $y = 8 - substr($posicion, 1, 1);
            } else {
                $x = 100;
                $y = 500;
            }
            // Pinta el tablero de ajedrez
            $color = "blanco"; // color de la primera casilla
            echo '<table><tr class="marron">';
            echo '<td></td><td>a</td><td>b</td><td>c</td><td>d</td><td>e</td><td>f</td><td>g</td><td>h</td><td></td></tr>';
            for ($fila = 0; $fila < 8; $fila++) {
                echo '<tr><td style="text-align: right; background-color: brown;">' . (8 - $fila) . '</td>';
                for ($columna = 0; $columna < 8; $columna++) {
                    echo "<td class=\"$color\">";

                    // Comprueba si el alfil está en la posición actual
                    if (($x == $columna) && ($y == $fila)) {
                        echo '<img src="./img/alfil.png">';
                        // Comprueba si es una posición a la que puede llegar el alfil
                    } else if (abs((abs($x) - abs($columna))) == abs((abs($y) - abs($fila)))) {
                        echo '<img src="./img/alfilsemitransparente.png">';
                    } else {
                        echo '<img src="./img/vacio.png">';
                    }
                    echo "</td>";

                    // Alterna el color de la casilla
                    if ($color == "blanco") {
                        $color = "negro";
                    } else {
                        $color = "blanco";
                    }
                    echo "</td>";
                }
                if ($color == "blanco") {
                    $color = "negro";
                } else {
                    $color = "blanco";
                }
                echo '<td style="text-align: left; background-color: brown;">' . (8 - $fila) . '</td></tr>';
            }
            ?>
            <tr class="marron">
                <td></td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>e</td>
                <td>f</td>
                <td>g</td>
                <td>h</td>
                <td></td>
            </tr>
            </table>

            <br>
            Introduzca las coordenadas del alfil (p. ej. e4)
            <br>
            <form action="#" method="POST">

                <input type="text" name="posicion" autofocus="" required=""><br>
                <input type="submit" value="Aceptar">
            </form>

            </br>
        </div>
        <div id="footer">
            ANGEL DANIEL RUIZ MONTES
        </div>
    </div>
</body>

</html>
