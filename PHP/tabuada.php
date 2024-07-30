<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        if(isset($_GET["n"])){
        $i=0;
        $n=$_GET["n"];
        for($i=1;$i<=10;$i++){
            $p = $n * $i;
            echo "<p> $n * $i = $p </p>";
        }
    }
    ?>

    
</body>
</html>