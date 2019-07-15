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
                    echo "Lançou a moeda $nmrArremesso vezes até conseguir 5 caras.";
                ?>
            </div>                
        </li>

        <li>
            <p>Do/while</p>
            <div>
                <?php
                $i = 0;
                $nmrArremesso = 0;
                do {
                    $moeda = mt_rand(0,1);
                    $nmrArremesso++;
                    if($moeda == 1){
                        $i++;
                    }else{
                        $i=0;
                    }
                }while($i != 1);
                echo "Lançou a moeda $nmrArremesso vezes até conseguir 1 cara.";
                ?>
            </div>
        </li>

        <li>
                <p>Definir um array com 5 strings que sejam nomes. Percorre esse array para imprimir todos os nomes na tela. <br>
                a. usar for. <br>
                b. usar while. <br>
                c. usar do/while.</p>
                <div>
                    <?php
                        $nomes = [
                            'Sérgio',
                            'Thomaz',
                            'Fernando',
                            'Ana',
                            'Marcos'
                        ];

                        for($i=0;$i<count($nomes);$i++){
                            echo $nomes[$i].'<br>';
                        }
                        echo "<br>";

                        $i=0;
                        while ($i < count($nomes)) {
                            echo $nomes[$i].'<br>';
                            $i++;
                        }
                        echo "<br>";

                        $i= count($nomes)-1;
                        do {
                            echo $nomes[$i].'<br>';
                            $i--;
                        } while ($i >=0);
                    ?>
                </div>
        </li>
    </ol>
</body>
</html>