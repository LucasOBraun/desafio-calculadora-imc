<?php
    include('conexao.php');
    $sql = "SELECT * FROM pessoa";
    $resultado = $conecta->query($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Calculadora de IMC</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
    </head>
    <body>

        <div id="logo">
            <img src="img/background.png">
        </div>

        <div class="container">
            
                <div id="divTitle">
                    <h1 id="title">CALCULE SEU IMC</h1>
                </div>

            <div id="sectionForm">
            
                <form>
                    <div>
                        <label for="nome">Seu nome:</label><br>
                        <input type="text" id="nome" name="nome" placeholder="ex: Lucas Braun" required>
                    </div>
                    <br>
                    <div>
                        <label for="peso">Seu peso: </label><br>
                        <input type="double" id="peso" name="peso" placeholder="ex: 75.50" required>
                    </div>
                    <br>
                    <div>
                        <label for="altura">Sua altura:</label><br>
                        <input type="double" id="altura" name="altura" placeholder="ex: 1.80" required>
                    </div>
                    <br>
                    <div>
                        <button id="botaoCalcular" type="submit">Calcular</button>
                    </div>
                </form>

                <div class="mostraResultados">
                    <a id="mostraResultados">Exibir todos resultados.</a>
                </div>
            </div>

            <div id="resultadosImc"> 
                <table>
                    <tr id="tableHead">
                        <th>Nome</th>
                        <th>Peso (kg)</th>
                        <th>Altura (cm)</th>
                        <th>IMC</th>
                        <th>Classificação</th>
                        <th>Ação</th>
                    </tr>
                    <?php
                        include('tabelaResultados.php');
                    ?>
                </table>
                <button id="voltarForm">Voltar</button>
            </div>

        </div>

        <script src="js/script.js" async></script>
            
    </body>
</html>
