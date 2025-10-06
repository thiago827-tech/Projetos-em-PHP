<?php
require_once "Calculadora.php";

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$op = $_POST["op"];

$calc = new Calculadora;

switch ($op) {
    case "soma":
        $calc->soma($n1, $n2);
        $calc->mostraResultado();
    break;

    case "subtracao":
        $calc->subt($n1, $n2);
        $calc->mostraResultado();
    break;

    case "multiplicacao":
        $calc->multi($n1, $n2);
        $calc->mostraResultado();
    break;

    case "divisao":
        if($n1 == 0 || $n2 == 0){
        die("Não é possivel dividir por zero.");
    }
        else{
        $calc->div($n1, $n2);
        $calc->mostraResultado();
        }
    break;

    default:
     echo"opção invalida";
    break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <pre>
    <a href="index.php"><input type="submit" value="Voltar"></a> 
</body>
</html>