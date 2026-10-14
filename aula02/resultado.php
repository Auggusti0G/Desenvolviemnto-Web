<?php
// Para as variaveis temos que colocar os metados nas variaveis 

// Se alterarmos o metado para GET temos que ira aparecer as informacoes da variavel na URL da Aplicação

//E para que as informacoes nao estejam visiveis na URL temos que alterar o metado para $_POST
$n1 = $_GET['numero1'];
$n2 = $_GET['numero2'];
$operacao = $_GET['operacao']; // Alterado para $_GET

if ($operacao == "+") {
    $resultado = $n1 + $n2;
} elseif ($operacao == "-") {
    $resultado = $n1 - $n2;
} elseif ($operacao == "*") {
    $resultado = $n1 * $n2;
} elseif ($operacao == "/") {
    if ($n2 != 0) {
        $resultado = $n1 / $n2;
    } else {
        $resultado = "Erro: Divisão por zero não é permitida!";
    }
} else {
    $resultado = "Operação inválida.";
}

echo "Cálculo: $resultado";
?>