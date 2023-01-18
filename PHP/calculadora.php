<?php
    //aqui escrevemos todo oque vai ser PHP

    //também declaramos variáveis em PHP
    $num1 = 5;  //toda variavel precisa de $ para ser declarada
    $num2 = 6;
    $a = 1;
    $b = -8;
    $c = 12;
    
    //Operações
    function soma($num1, $num2){
        return $num1 + $num2;
    }

    function subtrair($num1, $num2){
        return $num1 - $num2;
    }

    function divi($num1, $num2){
        if($num2 <= 0){
            return"Não é possivel dividir por zero";
        }
        return $num1 / $num2;
    }

    function multi($num1, $num2){
        return $num1 * $num2;
    }

    function potencia($num1, $num2){
        return $num1 ** $num2;
    }

    function tabuada($num2){
        $msg = "";
        for($i = 0; $i <=10; $i++){
            $msg .= "<br>$i x $num2 = " .($i * $num2);
        }
        return $msg;
    }

    function raiz($num1){
        if($num1 <0){
            return "Impossível calcular!";
        }
        return sqrt($num1);
    }

    function seno($nu1){
        if(($num1 < -1) || ($num1 >1)){
            return "O velor do seno só pode ser entre -1 e 1";
        }
        return asin($num1);
    }

    function tange($num1){
        return atan($num1);
    }

    function delta($a, $b, $c){
        $delta = ($b **2) - 4 * $a * $c;
        return $delta;
    }

    function xes1($a, $b, $c){
        $del = delta($a, $b, $c);
        if($del < 0){
            return "Impossível calcular o x1, pois delta é negativo!";
        }else{
            $X1 = (-$b + sqrt($delta)) / (2 * $a);
            return $X1;
        }  
    }

    function xes2(){
        $del = delta($a, $b, $c);
        if($del < 0){
            return "Impossível calcular o x2, pois delta é negativo!";
        }else{
            $X2 = (-$b - sqrt($delta)) / (2 * $a);
            return $X2;
        }
    }

    //para escrever na tela em PHP usamos o elemeto echo
    echo "<br>A soma de $num1 e $num2 é:".soma($num1, $num2);
    echo "<br>A subtração de $num1 e $num2 é:".subtrair($num1, $num2);
    echo "<br>A divisão de $num1 e $num2 é:".divi($num1, $num2);
    echo "<br>A multiplicação de $num1 e $num2 é:".multi($num1, $num2);
    echo "<br>$num1 elevado a $num2 é:".potencia($num1, $num2);
    echo "<br>A raiz de $num1 é:".raiz($num1);
    echo tabuada($num2);
?>