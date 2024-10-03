<?php
 
include('conexao.php');
 
$query = 'SELECT * FROM usuario';
$retorno = $conexao->query($query);
$registros = $retorno->fetchALL(PDO::FETCH_ASSOC);

echo '<a href="inserir.php"><button type="button">inserir</button></a><br>';
 
foreach ($registros as $registro)
{
    echo '<br>Nome: ' . $registro['nome'];
    echo '<br>E-mail: ' . $registro ['email'];
    echo '<br>Senha: ' . $registro ['senha'];
    echo '<br><a href="atualizar.php?email='.$registro['email'];
    echo '"><img src="editar.png" width=2%></a>';    
    echo '&nbsp&nbsp';
    echo '<br><a href="delete.php?email='.$registro['email'];
    echo '"><img src="deletar.png" width=2%></a>';   
    echo '<hr><width=30% allign="left"><hr>';
}