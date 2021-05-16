<?php

class geradorFakeNews
{
    private $letras = [
        "a" => "água com limão",
        "b" => "Bacon",
        "c" => "Cúrcuma",
        "d" => "Doce de leite",
        "e" => "Azeite",
        "f" => "Frango",
        "g" => "Gengibre",
        "h" => "Adoçante",
        "i" => "Açucar",
        "j" => "Jiló",
        "k" => "Comida Japonesa",
        "l" => "Leite",
        "m" => "Macarrão",
        "n" => "Nata",
        "o" => "Ovo",
        "p" => "Pizza",
        "q" => "Óleo de cooc",
        "r" => "Rabanada",
        "s" => "Suco detox",
        "t" => "Sal rosa",
        "u" => "Glutamina",
        "v" => "Jiló",
        "w" => "Peixe",
        "x" => "Própolis",
        "y" => "Kumbucha",
        "z" => "Peixe",
    ];

    private $meses = [
        "ao acordar",
        "pré-treino",
        "amassado com limão",
        "no cabelo",
        "em Jejum",
        "de 3 em 3 horas",
        "no chá",
        "no café",
        "Depois das 18h00",
        "antes da aula",
        "misturado na àgua",
        "antes do almoço"
    ];

    private $anos = [
        "diminiu o inchaço",
        "previne infarto",
        "cura dor de dente",
        "limpa o fígado",
        "deixa mais inteligente",
        "limpa as artérias",
        "deixa musculos@",
        "fortalece a unha",
        "mata",
        "dá sorte",
    ];

    function criarFrase($nome, $mes, $dia)
    {
        if(isset($nome[0]) && isset($this->letras[strtolower($nome[0])]) && isset($this->meses[($mes - 1)]) && isset($this->anos[($dia > 10 ? ($dia / 10) : ($dia)) - 1])){
            return $this->letras[strtolower($nome[0])] . " " . $this->meses[($mes - 1)] . " " . $this->anos[($dia > 10 ? ($dia / 10) : ($dia)) - 1];
        }else{
            return "";
        }
    }
}
