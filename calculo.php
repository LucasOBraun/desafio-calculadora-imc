<?php

// caso a variável dentro da condição exista, entrará no if
if (isset($_GET['nome']) && isset($_GET['peso']) && isset($_GET['altura'])) {

    $nome = $_GET['nome'];
    $peso = $_GET['peso'];
    $altura = $_GET['altura'];

    // se os campos peso e altura forem apenas números
    if (is_numeric($peso) && is_numeric($altura)) {

        $calculoImc = $peso / ($altura * $altura);
        $resultadoImc = $calculoImc;

        if ($resultadoImc <= 18.5) {
            $classificacao = "Abaixo do peso";
        } elseif ($resultadoImc > 18.5 && $resultadoImc < 25) {
            $classificacao = "Peso ideal";
        } elseif ($resultadoImc >= 25 && $resultadoImc < 30) {
            $classificacao = "Acima do peso";
        } else {
            $classificacao = "Obesidade";
        }

        // query para inserir a pessoa no banco 
        $query = mysqli_query($conecta, "INSERT INTO pessoa (nome,peso,altura,imc,classificacao) VALUES ('$nome', '$peso', '$altura', '$resultadoImc', '$classificacao')");

        // criado um alert para quando a pessoa for cadastrada no banco
        echo "<script>alert('IMC calculado com sucesso!! Acesse os resultados abaixo.');";
        echo "javascript:window.location='index.php';</script>";
        
    } else {
        // criado um alert para quando o peso e altura estiverem incoretos.
        echo "<script>window.alert('Opa! São válidos, apenas números nos campos: altura e peso. Favor, revise-os.');</script>";
    }

}

?>
