<?php

include_once('conexao.php');

$id = $_GET['id'];

// realizando a query direto do banco
$buscaId = "SELECT * FROM pessoa WHERE id=$id";
$resultado = $conecta->query($buscaId);

if ($resultado->num_rows > 0) {
    $deletaId = "DELETE FROM pessoa WHERE id=$id";
    $resultado = $conecta->query($deletaId);
}

header('Location: index.php');

?>