<?php
//A classe Pessoa deve ter os seguintes atributos:
//- nome;
//- idade;
//- corDosOlhos;
//- gênero;
//- altura;
//- peso;
//No caso do atributo corDosOlhos só poderá ser inserido uma dessas opções: 
//- Azul;
//- Castanho;
//- Verde;
//- Preto.
//E no gênero estas opções:
//- Masculino;
//- Feminino;
//Tarefa: Implemente o encapsulamento na sua classe Pessoa levando em consideração as informações acima.
Class Pessoa {
    private string $nome;
    private int $idade;
    private string $corDosOlhos;
    private string $genero;    
    private float $altura;
    private float $peso;
    
    public function __construct(string $corDosOlhos, string $genero)
    {
        $this->corDosOlhos = $corDosOlhos;
        $this->genero = $genero;
    }
    
    public function getNome(): string
    {
        return $this->nome;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function getCorDosOlhos(): string
    {
        return $this->corDosOlhos;
    }

    public function setCorDosOlhos(string $cor): void
    {
        $coresOlhos = ["Azul", "Castanho", "Verde", "Preto"];
        
        if (in_array($cor, $coresOlhos)) {
            $this->corDosOlhos = $cor;
        } else {
            echo "Essa cor não é validada para cor dos olhos, gentileza selecionar outra opção";
        }
    }

    public function getGenero(): string
    {
        return $this->genero;
    }

    public function setGenero(string $genero): void
    {
        $generos = ["Masculino", "Feminino"];
        
        if (in_array($genero, $generos)) {
            $this->genero = $genero;
        } else {
            echo "Esse gênero não está disponivel, gentileza selecionar outra opção.";
        }
    }

    public function getAltura(): float
    {
        return $this->altura;
    }

    public function getPeso(): float
    {
        return $this->peso;
    }
    }
