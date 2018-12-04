<?php
    require_once('Calculadora.php'); //importo a classe

    $op = new Calculadora(); //faco a instancia

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    $botao =  $_POST['operacao'];

    if ($botao == "Somar") {
        $op->somar($n1, $n2);
    }
    else if ($botao == "Subtrair"){
        $op->subtrair($n1, $n2);
    }
    else if($botao == "Multiplicar"){
        $op->multiplicar($n1, $n2);
    }
    else if($botao == "Dividir"){
        $op->dividir($n1, $n2);
    }

?>