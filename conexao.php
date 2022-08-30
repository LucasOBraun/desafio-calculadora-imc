<?php

$host = "mysql.lucasbraun.kinghost.net";
$user = "lucasbraun05";
$pass = "lucasbraun05";
$db   = "lucasbraun05";

$conecta = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
    printf("Conexão com o bando de dados falhou %s\n", mysqli_connect_errno());
    exit();
}

include('calculo.php');

?>
