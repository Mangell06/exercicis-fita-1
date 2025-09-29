<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hundir la flota</title>
</head>
<body>
    <?php
    $col = 9;
    $row = 9;
    $quantityShips =  ["Destructor" => ["quantity"=>0,"ocupation"=>1],
    "Submarino" => ["quantity"=>0,"ocupation"=>2],
    "Crucero" => ["quantity"=>0,"ocupation"=>3],
    "Acorazado" => ["quantity"=>0,"ocupation"=>4],
    "Portaaviones" => ["quantity"=>0,"ocupation"=>5]];
    $countOcupation = 0;
    $keysShips = array_keys($quantityShips);
    while ($countOcupation < 12) {
        $randomNum = rand(0,4);
        $quantityShips[$keysShips[$randomNum]]["quantity"] += 1;
        $countOcupation +=  $quantityShips[$keysShips[$randomNum]]["ocupation"];
    }
    $horientationShip = 0;
    $positionOcupation = [];
    for ($i = 0; $i < count($keysShips); $i++) {
        for ($j = 0; $j < $quantityShips[$keysShips[$i]]["quantity"]; $j++) {
            $placed = false;

            while (!$placed) {
                $horientationShip = rand(0, 3);
                $initialPositionY = rand(0, $row - 1);
                $initialPositionX = rand(0, $col - 1);
                $ocupation = $quantityShips[$keysShips[$i]]["ocupation"];
                $colisionShip = false;
                $positions = [];
                for ($k = 0; $k < $ocupation; $k++) {
                    switch ($horientationShip) {
                        case 0: // arriba
                            $newY = $initialPositionY - $k;
                            $newX = $initialPositionX;
                            break;
                        case 1: // derecha
                            $newY = $initialPositionY;
                            $newX = $initialPositionX + $k;
                            break;
                        case 2: // abajo
                            $newY = $initialPositionY + $k;
                            $newX = $initialPositionX;
                            break;
                        case 3: // izquierda
                            $newY = $initialPositionY;
                            $newX = $initialPositionX - $k;
                            break;
                    }
                    if ($newY < 0 || $newY >= $row || $newX < 0 || $newX >= $col) {
                        $colisionShip = true;
                        break;
                    }

                    $posString = $newY . ',' . $newX;
                    if (in_array($posString, $positionOcupation)) {
                        $colisionShip = true;
                        break;
                    }

                    $positions[] = $posString;
                }
                if (!$colisionShip) {
                    foreach ($positions as $pos) {
                        $positionOcupation[] = $pos;
                    }
                    $placed = true;
                }
            }
        }
    }
    echo "<table border='1' style='border-collapse: collapse; text-align:center;'>";
    for ($i = 0; $i <= $row; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $col; $j++) {
            echo "<td style='width:30px; height:30px;>";
            if (in_array($j . ',' . $i, $positionOcupation)) {
                echo "X";
            }
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>