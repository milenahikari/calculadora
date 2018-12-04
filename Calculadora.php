<?php 
//Classe inicia com letra maiuscula e não fecha a tag do php

    class Calculadora
    {
        function somar ($n1, $n2)
        {
            echo $n1 + $n2;
        }
        function subtrair ($n1, $n2)
        {
            echo $n1 - $n2;
        }
        function multiplicar ($n1, $n2){
            echo $n1 * $n2;
        }
        function dividir ($n1, $n2)
        {
            echo $n1 / $n2;
        }
    }