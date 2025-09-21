<?php
//Criando Funções para calcular as quatro operações matemáticas

function soma ($n1, $n2) {
    return $n1 + $n2;
}

function subt ($n1, $n2) {
    return $n1 - $n2;
}

function multi ($n1, $n2) {
    return $n1 * $n2;
}

function div ($n1, $n2) {
    return $n1 / $n2;    
}

//Função criada para exibir resultado na tela
function msg ($texto) {
    echo "O Resultado da operação é: ".$texto;
}
?>