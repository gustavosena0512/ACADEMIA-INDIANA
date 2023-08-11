<?php
Class Pessoa {
    public string $cordosOlhos;
    public int $cordaPele;
    public int $cordoCabelo;    
    public bool $peso;
    public bool $altura;

    public function setcordosOlhos(string $cordosOlhos): void

    {   
        $this->cordosOlhos = $cordosOlhos;
    }
  
    public function setcordaPele(int $cordaPele): void

    {   
        $this->cordaPele = $cordaPele;
    }

    public function setcordoCabelo(int $cordoCabelo): void

    {   
        $this->cordoCabelo = $cordoCabelo;
    }

    public function setpeso(bool $peso): void

    {   
        $this->peso = $peso;
    }

    public function setaltura(bool $altura): void

    {   
        $this->altura = $altura;
    }
 
    }
