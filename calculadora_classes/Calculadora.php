<?php

//Criando classe calculadora + seus atributos e metódos.
class Calculadora{
    private $numero1;
    private $numero2;
    private $resultado;

//Criando metódos para realizar operações matemáticas
    public function soma($n1, $n2){
        $this->resultado = $n1+$n2;
        return $this->resultado;
    }

    public function subt($n1, $n2){
        $this->resultado = $n1-$n2;
        return $this->resultado;
    }

    public function multi($n1, $n2){
        $this->resultado = $n1*$n2;
        return $this->resultado;
    }

    public function div($n1, $n2){
        $this->resultado = $n1/$n2;
        return $this->resultado;
    }

//Criando metodo para exibir o resultado na tela.
    public function mostraResultado(){
        echo "O resultado é: ".$this->resultado;
    }
}