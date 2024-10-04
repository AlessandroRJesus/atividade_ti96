<?php
include("conexao.php");
// Consulta para selecionar os filmes
$sql = "SELECT * FROM produtos";
$dados = $conn->query($sql);

// Verificar se houve erro na consulta
if (!$dados) {
    die("Erro na consulta: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Filme</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="inserir">
        <h1>Cadastro de Filme</h1>
        <form action="submit.php" method="post">
            <label for="filme">Filme:</label>
            <input type="text" id="filme" name="filme" required>

            <label for="genero">Gênero:</label>
            <input type="text" id="genero" name="genero" required>

            <label for="indicacao">Indicação:</label>
            <input type="text" id="indicacao" name="indicacao" required>

            <label for="lancamento">Lançamento:</label>
            <input type="date" id="lancamento" name="lancamento" required>

            <label for="duracao">Duração:</label>
            <input type="time" id="duracao" name="duracao" required>

            <label for="diretor">Diretor:</label>
            <input type="text" id="diretor" name="diretor" required>

            <label for="produtora">Produtora:</label>
            <input type="text" id="produtora" name="produtora" required>

            <label for="valor">Valor:</label>
            <input type="text" id="valor" name="valor" required>

            <button type="submit">Cadastrar Filme</button>
        </form>
    </div>
</body>
</html>
