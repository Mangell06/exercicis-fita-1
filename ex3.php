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
            #echo 'Això esta fet amb un php';
            $N = 4;
            $M = 5;
            for ($i = 0; $i <= $N; $i++) {
                echo "<tr>";
                for ($j = 0; $j <= $M; $j++) {
                    echo "<td>".($j+$i)."</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>

        <div class=footer>Footer</div>
    </body>
</html>