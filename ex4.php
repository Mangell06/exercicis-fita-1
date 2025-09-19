<!DOCTYPE html>
<html>
    <head>
        <style>
            .footer {
                background-color : lightblue;
                position: fixed;
                left : 0;
                bottom : 0;
                width :100%;
                height : 3em;
                text-align: center;
                padding-top: 20px;
            }
            td {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <h1>hola</h1>
        <table>
            <?php
            $N = 4;
            for ($i = 0; $i <= $N; $i++) {
                echo "<tr>";
                for ($j = 0; $j <= $N; $j++) {
                    if ($i != 0 && $j == 0) {
                        echo "<td>".chr(65 + $i-1)."</td>";
                    }else if ($j != 0 && $i == 0) {
                        echo "<td>".($j)."</td>";
                    } else {
                        echo "<td> </td>";
                    }
                }
                echo "</tr>";
            }
            ?>
        </table>

        <div class=footer>Footer</div>
    </body>
</html>