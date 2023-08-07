<?php

//1- Crie uma função que receba 2 valores inteiros como argumentos e retorne a sua soma. 
//Se o valor da soma for negativo a função deverá o valor 0.
echo 'exercicio 1';
echo"<br>";


function somanegativa($a, $b) {
    return max($a + $b, 0);
}

$valor1 = -25;
$valor2 = 10;
$resultado = somanegativa($valor1, $valor2);
echo "o resultado da função é: $resultado";
echo"<br>";
echo"<br>";

//2- Crie uma função em PHP que receba 2 notas ($n1 e $n2) de um aluno. Essa função deve 
//retornar um booleano indicando se o aluno foi aprovado. Para ser aprovado, a soma das 
//notas deve ser igual ou superior a 19 e ambas devem ser superiores a 7.
echo 'exercicio 2';
echo"<br>";

function notasaluno($n1, $n2) {
    $soma = $n1 + $n2;

    if ($soma>= 19 && $n1 > 7 && $n2 > 7) {
        return true;
    } else {
        return false;
    }
}

$nota1 = 3;
$nota2 = 9;
$aprovado = notasaluno($nota1, $nota2);
if ($aprovado) {
    echo "Aluno aprovado!";
} else {
    echo "Aluno reprovado!";
}
echo"<br>";
echo"<br>";

echo 'exercicio 3';
echo"<br>";

//3- Crie uma função em PHP que calcule e imprima o salário reajustado de um funcionário
//de acordo com a seguinte regra:
//• salários até R$ 3.000,00 , reajuste de 50%
//• salários de R$ 3.000,00 ou mais, reajuste de 30%

function ajustesal($salario) {
    if ($salario <= 3000) {
        $salnovo = $salario * 1.5; // 50% de reajuste
    } else {
        $salnovo  = $salario * 1.3; // 30% de reajuste
    }

    return $salnovo ;
}

$salatualiza = 2324;
$salnovo  = ajustesal($salatualiza);
echo "Salário atual: R$ " . $salatualiza . "<br>";
echo "Novo salário com reajuste: R$ " . $salnovo;

echo"<br>";
echo"<br>";

echo 'exercicio 4';
echo"<br>";

//4- Crie uma função em PHP que receba a altura e o peso de uma pessoa, calcule seu IMC de acordo com a
//fórmula abaixo:
//IMC = Peso dividido pela altura ao quadrado ( peso ÷ (altura²)).
//A função deve retornar uma string (magreza, normal. sobrepeso ou obesidade) de acordo com a tabela abaixo

function calcular_imc($altura, $peso) {
    $imc = $peso / ($altura * $altura);
    
    if ($imc < 18.5) {
        return "Segundo a tabela da OMS a classificação do seu imc é de magreza";
    } elseif ($imc >= 18.5 && $imc <= 24.9) {
        return "Segundo a tabela da OMS a classificação do seu imc é de  normal";
    } elseif ($imc >= 24.9 && $imc <= 30) {
        return "Segundo a tabela da OMS a classificação do seu imc é de  sobrepeso";
    } else {
        return "Segundo a tabela da OMS a classificação do seu imc é de  obesidade";
    }
}


$altura = 1.70; 
$peso = 88.5; 
$classificacao = calcular_imc($altura, $peso);
echo "O seu IMC é: " . number_format($peso / ($altura * $altura), 2) . "<br>";
echo "Classificação: " . $classificacao;
?>