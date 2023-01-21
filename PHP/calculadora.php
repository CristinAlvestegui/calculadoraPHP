<?php
    //aqui escrevemos todo oque vai ser PHP

    //também declaramos variáveis em PHP
    $num1 = 5;  //toda variavel precisa de $ para ser declarada
    $num2 = 6;
    $a = 1;
    $b = -8;
    $c = 12;
    $pasc1 = 1; 
    $pasc2 = 0; 
    $gas = 10; //litros
    $km = 5; //kilometros
    $bin = "101011"; //Binario
    $hexa = "45F3D"; //Hexadecimal
    $salesman = "Yuri";
    $sal = 1500;
    $vendas = 2000;
    $aluno = "Vitor";
    $nota1 = 8.8;
    $nota2 = 7.1;
    $nota3 = 7.5;
    $cel = 31;
    $A = 32;
    $B = 23;
    $C = 29;
    
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

    function pascal($pasc1){
        $msg = "";
        for($x = 0; $x < 5; $x++){  // pensa x como um contador nossa linha
            for($y = 0; $y < 5; $y++){ // pensa y como um contador colunas
                $msg .= "$pasc1 , $x <br>"; //aqui vc vai preencher esse loop com a formula "Sn=2n, em que n é o número da linha."                         
            }
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

    function exerciUm($gas, $km){
        //calcular o consumo médio de gasolina de um autómovel
        //fornecendo a distancia total percorrida e total de gasolia gasto
        $media = $km/$gas;
        return $media;

    }

    function exerciDois(){
        //Realizar a sequencia de Fibonacci ate 1000
        //preciamos de variaver para anterio e prox
        for($i = 0; $i <=1000; $i++){
            
            
        }
    }

    function exerciTres(){
        /*
        exercicio 3: Criar um conversor de binários para decimal, e inverter
        cada valor binaria deve ser multiplacdo por 2 elevado de ero ate 7
        */
        //$den = 1*2**5 + 0*2**4 + 1*2**3 + 0*2**2 + 1*2**1 + 1*2**0;
        $den = 0;
        $bin = "10101011"; //Binario
        $cont = strlen($bin) - 1; //contador do tamanho da string -1
        for($i = 0; $i < strlen($bin); $i++){ //
            $carac = substr($bin, $i,1);

            if($carac == 1){
                $den += pow(2,$cont);
            }
            $cont--;
        }
        return $den;
    }

    function exerciQua(){
        //exercicio 4: Conversor de decimal para hexadecimal e inverter
    }

    function exerciCin(){
        //exercicio 5: Conversor de hexadecimal para binarias e inverter
        $conver = 4*16**4 + 5*16**3 + 15*16**2 + 3*16**1 + 16*16**0;
        return $conver;
    }

    function exerciMeia(){
        //exercicio 6: Nome do vendedor em tela + salario fixo + total de vendas + 15% de comissão
        //informar o total
        $vendas = 2000;
        $sal = 1500;
        $total = ($vendas * 15) / 100;
        return $total + $vendas + $sal;
    }

    function exerciSete(){
        //exercicio 7: Mostrar o nome do aluno em tela, e calcular a média de notas das 3 provas
        $aluno = "Vitor";
        $nota1 = 8.8;
        $nota2 = 7.1;
        $nota3 = 7.5;
        $media = ($nota1 + $nota2 + $nota3) / 3;
        return $media;
    }

    function exerciOito(){
        $cel = 31;
        $far = (9*$cel+160)/5;
        return $far;
    }

    /*
    function exerciNove(){
        $aniver = "05/11/1994" //definindo o aniversario
        //vefiricar se essa data é valida, vamos ter que converter para int nossa string.
        var_dump(checkdate($day, $mes, $year));
        if(checkdate()== false){
            return "Por favor digite uma data valida!";
        } //Se for valida separar essa string depois do / e armazenar em cada uma das variaves.
        $day = "";
        $mes = "";
        $year = 1994;
        
       
        if(($year / 4 == 0) && ($year /400 == 0)){
            $mes * 29;
        }
        if($mes == 02){
            $mes * 28;
        }else{
            $mes = $mes * 30;
        }
        $ano = $ano *365;
    }

    function anoBissex($year){
        $year / 4 = $valor
        $valor / 4 //ateee chegar em zero!

        while($year >=0){
            if(($year == 0) && ($mes == 02)){
                $mes = 29;
            }
        }
    }

    */

    function exerciDez(){

    }

    function exerciOnze(){
        $aluno = "Luis";
        $nota1 = 9.8;
        $nota2 = 3.1;
        $nota3 = 6.5;
        $aritme = ($nota1 + $nota2 + $nota3)/ 3;

        $peso1 = 5;
        $peso2 = 2;
        $peso3 = 4;

        $ponde = (($peso1 * $nota1) + ($peso2 * $nota2) + ($peso3 * $nota3)) / $peso1 + $peso2 + $peso3;

        $harmo = 3 / 1/$nota1 + 1/$nota2 + 1/$nota3;
        
        $msg = "A média Artimética é: $aritme <br> A média Ponderada é de: $ponde <br> E a média harmônica é de: $harmo"; 
        return $msg;
    }

    function exerciDose(){
        $valPeca1 = 45;
        $valPeca2 = 75;
        $quanPeca1 = 5;
        $quanPeca2 = 3;
        $aliquo = 24;
        $codPeca1 = 1;
        $codPeca2 = 2;
        $ipi = ($valPeca1 * $quanPeca1 + $valPeca2 * $quanPeca2)*($aliquo/100+1);
        $msg = "o valor da peça 1: $valPeca1 R$, valor da peça 2: $valPeca2 R$ <br> IPI: $ipi";
        return $msg;
        
    }

    function exerciTreze(){
        $A = 32;
        $B = 23;
        $C = 29;
        $R =($A + $B)**2;
        $S = ($B + $C)**2;
        $D = ($R + $S) / 2;
        return $D;
    }

    function exerciCator(){
        $hF = 1.62;
        $hM = 1.80; 
        $mascu = (72.7*$hM) - 58;
        $feme = (62.1 * $hF) - 44.7;
        $msg = "<br>Altura femeninina declara foi de: $hF <br>Altura masculina declarada foi de: $hM <br> O peso ideal respectivamente seria de: $feme Kg, $mascu Kg";
        return $msg;
    }

 
    //para escrever na tela em PHP usamos o elemeto echo
    echo "<br>A soma de $num1 e $num2 é:".soma($num1, $num2);
    echo "<br>A subtração de $num1 e $num2 é:".subtrair($num1, $num2);
    echo "<br>A divisão de $num1 e $num2 é:".divi($num1, $num2);
    echo "<br>A multiplicação de $num1 e $num2 é:".multi($num1, $num2);
    echo "<br>$num1 elevado a $num2 é:".potencia($num1, $num2);
    echo "<br>A raiz de $num1 é:".raiz($num1) ."<br>";
    echo "Percorrimos ".$km." km, e usamos ".$gas." litros. Em média foi um gasto de:".exerciUm($gas, $km);
    //echo pascal($pasc1);
    echo tabuada($num2)."<br>";
    echo "O valor binario é: $bin  Convertido para decimal é:".exerciTres()."<br>";
    echo "hexadecimal: $hexa Convertido para decimal é:".exerciCin()."<br>";
    echo "Bem-vindo:  $salesman <br> Seu salário fixo é de:  $sal R$  <br>O total de vendas desse mês foi de:  $vendas R$  <br>Junto com a comissão fico um total de: ".exerciMeia()."R$";
    echo "<br>Oi ".$aluno." Bem-vindo ao Senac"."<br>Primeira nota: ".$nota1."<br>Segunda nota: ".$nota2."<br>Terceira nota:".$nota3."<br>A Média é de: ".exerciSete()."<br>";
    echo "Temperatura em Celsius é de: ".$cel."°C "."<br>Convertendo para Fahrenheit é:".exerciOito()."°F <br>";
    echo exerciOnze()."<br>";
    echo exerciDose()."<br>";
    echo "Valores inicias de A:$A, B:$B e C:$C <br> calculamos a expressão: D = R + S /2<br>Onde R = (A + B)**2 e S = (B + C)**2<br>Reasultado: ".exerciTreze()."<br>";
    echo "Peso ideal".exerciCator();
