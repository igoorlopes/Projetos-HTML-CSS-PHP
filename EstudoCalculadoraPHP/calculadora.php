<?php

    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $op = $_POST["op"];

    if ($op == "*"){
    echo "A multiplicação dos números é: " . ($n1*$n2);
    }
    if ($op == "+"){
    echo "A soma dos números é: " . ($n1+$n2);
    }
    if ($op  == "-"){
    echo "A subtração dos números é: " . ($n1-$n2);
    }
    if ($op  == "/"){
    echo "A divisão dos números é: " . ($n1/$n2);
    }
?>

<br>
<br>
<a href="formCalcular.html">Voltar</a>