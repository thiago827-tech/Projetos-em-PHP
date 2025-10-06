<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <pre>
    <form action="resultado.php" method="post">
    <label>Valor 1:</label>
    <input type="number" name="n1" required>

    <select name="op">
        <option value="soma">Soma</option>
        <option value="subtracao">Subtração</option>
        <option value="multiplicacao">Multiplicação</option>
        <option value="divisao">Divisão</option>
    </select>

    <label>Valor 2:</label>
    <input type="number" name="n2" required>

    <input type="submit" value="Enviar"> <input type="reset" value="Limpar">
    </form>
</body>
</html>