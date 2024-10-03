<?php
    $i = 1;
    while ($i <= 10)
    {
        if($i % 2 == 0)
        {
            echo "$i é um numero par.";
            echo "<br>";
        }
        $i++; 
    }

    echo "<br>";

    $x = 1;
    do
    {
        echo $x;
        echo "<br>";
        $x++;
    } while($x < 6);
    
    echo "<br>";
    
    $y = 0;
    do
    {
        $y++;
        if ($y == 3) continue;
        echo $y;
        echo "<br>";
    
    } while($y < 6);

    echo "<br>";

    for ($x = 0; $x <= 10; $x++)
    {
        echo "O numero é: $x <br>";
    }

    echo "<br>";

    $cores = array("vermelho", "verde", "azul", "amarelo");
    foreach ($cores as $cor)
    {
        echo "$cor <br>";
    }

    echo "<br>";

    $membros = array("Alessandro"=>"17","João"=>"18", "Lucas"=>"20");
    foreach ($membros as $nome => $idade)
    {
        echo "$nome : $idade <br>";
    }

?>