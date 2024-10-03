<?php
    $usuario = "lucas";
    $senha = "123";
    $i = 1;
    
    while ($i < 3) 
    {

        if ($_POST["usuario"] == $usuario and $_POST["senha"] == $senha)
        {
            header("location: loginSucesso.php");
        }

    else 
    {
        header("location: form.php");
        print "<script>alert('Dados incorretos!');</script>";
        

    }
        $i++;
        break;
    }


?>