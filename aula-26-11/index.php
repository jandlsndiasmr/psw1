<?php
    $var = "Neymar";
    $tipo = gettype($var);
    echo "$var "." ($tipo)<br>";
    
    $var = 12;
    $tipo = gettype($var);
    echo "$var - ($tipo)<br>";

    $var = 3.1415;
    $tipo = gettype($var);
    echo "$var - ($tipo)<br>";

    $var = true;
    $tipo = gettype($var);
    echo "$var - ($tipo)<br><br>";
?>

<?php

    if(is_null($var)){
        echo    "variável" . "\$var é nula/vazia!" . "<br>";
    }

    $var = "Bill Gates";
    if(is_string($var)){
        echo "A vriável " . "\$var é string! " . "<br> ";
    }

    $var = "12";
    if(is_integer($var)){
        echo "A variável " . "\$var é inteira! " . "<br>";
    }

    $var = false;
    if(is_bool($var)){
        echo "A variável " . "\$var é booleana! " . "<br>";
    }

    $var = 25.5;
    if(is_float($var)){
        echo "A variável " . "\$var é real! " . "<br>";
    }

    $var = 12.5;
    if(is_double($var)){
        echo "A variável " . "\$var é real! " . "<br>";
    }

?>