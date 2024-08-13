<!DOCTYPE html>
<html>
<head>
    <title>Hora Atual</title>
</head>
<body>
    <h1>Hora Atual</h1>
    <?php
    date_default_timezone_set('America/Sao_Paulo');
    $hora_atual = date('H:i:s'); 

    echo "<p>A hora atual do sistema é: $hora_atual</p>";
    ?>
</body>
</html>
