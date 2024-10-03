<?php 

  include('conexao.php');

    $conexao = new PDO($dsn, $user, $pass);

    $conexao -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = 'SELECT * FROM produtos limit 2';

    $retorno = $conexao -> query($query);

    $registros = $retorno -> fetchAll(PDO::FETCH_ASSOC);

    foreach($registros as $registro)
    {
        echo 'Id: '. $registro['id'];
        echo '<br>Filme: '.$registro['filme'];
        echo '<br>Genero: '.$registro['genero'];
        echo '<br>Indicação: '.$registro['indicacao'];
        echo '<hr>';
    }

    echo '<pre>';
    print_r($registros);
?>