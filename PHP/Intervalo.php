<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    if(isset($_GET["n1"]) && isset($_GET["n2"])){
        $n1=$_GET["n1"];
        $n2=$_GET["n2"];
        $i=$n1;
        $i++;

        for($i>$n1;$i<$n2;$i++){
            echo "<p> $i </p>";
        }
    }

?>
    
</body>
</html>