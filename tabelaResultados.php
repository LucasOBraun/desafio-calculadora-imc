<?php 

// retorna um array com os dados da pessoa
while ($dadosPessoa = mysqli_fetch_assoc($resultado)) {

    // inserindo os dados na tabela para o html
    echo "<tr id='tableBody'>";
    echo "<td>" . $dadosPessoa['nome'] . "</td>";
    echo "<td>" . number_format($dadosPessoa['peso'], 2) . "</td>";
    echo "<td>" . number_format($dadosPessoa['altura'], 2) . "</td>";
    echo "<td>" . number_format($dadosPessoa['imc'], 2) . "</td>";
    echo "<td>" . $dadosPessoa['classificacao'] . "</td>";
    echo "<td> <a href='deletaPessoa.php?id=$dadosPessoa[id]'>Excluir</a> </td>";
    echo "<tr></tr>";
    
}

?>