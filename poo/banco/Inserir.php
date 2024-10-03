<html>

<?php 
    include("conexao.php");
    
?>

    <form action="insert.php" method="POST">
    Nome: <input type="text" name="nome"><br>
    E-MAIL: <input type="text" name="email"><br>
    Senha: <input type="text" name="senha"><br>

    <input type="submit" value="inserir">
    </form>

</html>

