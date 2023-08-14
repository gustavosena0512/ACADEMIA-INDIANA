<?php
require_once "exercicio_1POO.php";

$pessoa = new Pessoa("Gustavo", 20, "Castanho", "Masculino", 1.70, 89);
echo "Nome: " . $pessoa->getNome() . "<br>";
echo "Idade: " . $pessoa->getIdade() . "<br>";
echo "Cor dos olhos: " . $pessoa->getCorDosOlhos() . "<br>";
echo "Gênero: " . $pessoa->getGenero() . "<br>";
echo "Altura: " . $pessoa->getAltura() . "<br>";
echo "Peso: " . $pessoa->getPeso() . "<br>";

