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
                        echo $i.",";
                    }
                ?>
            </div>
        </li>

        <li>
            <p>Random number</p>
            <div>
                    <?php 
                        for($i=1;$i<mt_rand(0,100);$i++){
                            echo $i.",";
                        }
                    ?>
            </div>
        </li>

        <li>
            <p>Multiplicao 2</p>
            <table border=1>
                    <?php 
                        $num2 = 10;
                        
                        for($i=1;$i<=$num2;$i++){
                            echo "<tr>";
                            echo "<td>";
                            echo 2 .' x '. $i .' = '. (2*$i);
                            echo "</td>";
                            echo "</tr>";
                        }
                    ?>
            </table>
        </li>

        <li>
            <p>While</p>
            <div>
                <?php 
                    $i = 0;
                    $nmrArremesso = 0;
                    while ($i != 5) {
                        $moeda = mt_rand(0,1);
                        $nmrArremesso++;
                       if ($moeda == 1) {
                            $i++;
                       }else {
                           $i = 0;
                       }
                    }
                    echo "Lançou a moeda $nmrArremesso vezes até conseguir 5 caras";
                ?>
            </div>                
        </li>
    </ol>
</body>
</html>