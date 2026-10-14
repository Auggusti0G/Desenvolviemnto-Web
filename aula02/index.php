<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
<!-- Temos que colocar no form a URL referente ao arquivo  -->
    <form action="resultado.php" method="GETS">  
<!--Quando alteramos o metado para o GET podemos observar as informações expostas na URL 
para que  -->

<!-- E para que nao apareça as informações das variaveis na URL temos que alterar o metado de GET para POST  -->
        N1: <input type="number" name="numero1" step="any" required>
        N2: <input type="number" name="numero2" step="any" required>
        <br><br>

        <select name="operacao">
            <option value="+">Somar</option>
            <option value="-">Subtrair</option>
            <option value="*">Multiplicar</option>
            <option value="/">Dividir</option>
        </select>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>