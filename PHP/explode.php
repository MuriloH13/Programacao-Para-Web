<form action="" method="GET">
    <input type="text" name="valores">
    <input type="submit" value="enviar">
</form>

<?php

if(!isset($_GET["valores"])){
    exit;
}

    $string=$_GET["valores"];
    $soma = 0;
    $elementos=explode(";",$string);
    foreach($elementos as $key=> $item){
        $soma = $soma + $item;
    }

    echo "<p> Soma:$soma </p>";

?>