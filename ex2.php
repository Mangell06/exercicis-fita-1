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
            <tr>
                <?php
                    #echo 'Això esta fet amb un php';
                    $N = 30;
                    for ($i = 0; $i <= $N; $i++) {
                        $num = chr(65 + $i);
                        echo "<td>$num</td>";
                    }
                ?>
            </tr>
            <tr>
                <?php
                    #echo 'Això esta fet amb un php';
                    $N = 30;
                    for ($i = 0; $i <= $N; $i++) {
                        echo "<td>$i</td>";
                    }
                ?>
            </tr>
        </table>

        <div class=footer>Footer</div>
    </body>
</html>