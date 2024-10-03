<?php 

    include('conexao.php');
    $email = $_GET["email"];

    $delete = "DELETE from usuario where email = '$email'";
    $retorno = $conexao ->exec($delete);

    header("location: exibir.php");

?>