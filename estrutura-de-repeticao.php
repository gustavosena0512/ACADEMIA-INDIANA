
<?php

//1-Termine o script abaixo, imprimindo todos os números entre $numero1 e $numero2.

$numero1 = 7;
$numero2 = 27;

echo ('exercio 1');
echo("<BR>");
echo("<BR>");

for($i=7; $i<=27; $i++){
       
    echo $i."<br>";
}

echo("<BR>");
echo("<BR>");
echo("<BR>");

//2- Crie um script em PHP que crie um vetor de 5 elementos inteiros com valores aleatórios,
//entre 0 e 10. Encontre e mostre o menor elemento e sua posição no vetor.

echo ('exercio 2');
echo("<BR>");
echo("<BR>");

$vetor = array();
for ($i=0; $i<5; $i++) {
    $vetor[] = rand(0,10);
}

$menor_elemento = $vetor[0];
$posicao_menor = 0;
for ($i=1;$i<5;$i++) {
    if ($vetor[$i]<$menor_elemento) {
        $menor_elemento = $vetor[$i];
        $posicao_menor = $i;
    }
}
echo "Vetor: " . implode(', ', $vetor) . "<br>";
echo "Menor elemento: $menor_elemento<br>";
echo "Posição do menor elemento: $posicao_menor";

echo("<BR>");

//3- Crie um script em PHP crie dois vetores de 10 posições preenchidos com valores aleatórios.
//Faça a soma dos elementos de mesmo índice, colocando o resultado em um terceiro vetor.
//Imprima os três vetores, um após o outro. Obs: Utilize um for
echo("<BR>");
echo ('exercio 3');
echo("<BR>");
echo("<BR>");

$vetor1 = array();
$vetor2 = array();
for ($i = 0; $i < 10; $i++) {
    $vetor1[] = rand(1, 100);
    $vetor2[] = rand(1, 100);
}

$soma = array();
for ($i = 0; $i < 10; $i++) {
    $soma[] = $vetor1[$i] + $vetor2[$i];
}

echo "Vetor 1: " . implode(', ', $vetor1) . "<br>";
echo "Vetor 2: " . implode(', ', $vetor2) . "<br>";
echo "Soma dos indices será igual a: " . implode(', ', $soma);


echo("<BR>");
echo("<BR>");
echo ('exercio 4');
echo("<BR>");
echo("<BR>");
//4- Seu salário atual é de R$5.000,00. O do seu colega é de R$2.500,00. Suponha que você
//tenha 10% de aumento todo ano e seu colega 20%. Crie um script que calcula em quantos anos 
//seu colega irá passar a ganhar mais que você.

$sal1 = 5000;
$sal2 = 2500;
echo("<BR>");
echo("<BR>");
$sal1 = 5000;
$sal2 = 2500;
$anos = 0;

while ($sal2 <= $sal1) {
    $sal1 += $sal1 * 0.10; 
    $sal2 += $sal2 * 0.20; 
    $anos++;
}

echo "O meu colega  irá me ultrapassar em $anos anos.";

?> 