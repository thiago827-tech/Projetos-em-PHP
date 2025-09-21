<?php
//Importando funções do outro arquivo php
include "funcoes.php";

//Colocando os dados recebidos do formulario em variaveis.

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$op = $_POST["op"];

//Executando o calculo atraves das funcões importadas

switch ($op) {
    case 'soma':
        $res = soma($n1, $n2);
        msg($res);
    break;

    case 'subtracao':
        $res = subt($n1, $n2);
        msg($res);
    break;

    case 'multiplicacao':
        $res = multi($n1, $n2);
        msg($res);
    break;

    case 'divisao':
        if ($n1 == 0 || $n2 == 0) {

            echo "Não é possivel divisão por zero.";
        }

        else {

            $res = div($n1, $n2);
            msg($res);
        }

    break;
    
    default: 
        echo "Operação Invalida!";
 }

?>
<pre>
<form action="index.php">
    <input style="font-size: 15px" type="submit" value="Voltar">
</form>