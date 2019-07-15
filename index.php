<?php 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ol>
        <li>
            <p>Utilizando um FOR, imprimir os numeros de 1 a 100.</p>
            <div>
                <?php
                    $num = 101;
                    for($i=1;$i<$num;$i++){
                        echo $i."<br>";
                    }
                ?>
            </div>
        </li>
    </ol>
</body>
</html>