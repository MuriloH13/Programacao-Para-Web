<!DOCTYPE html>
<html>
<head>
    <title>Soma de Valores</title>
</head>
<body>
    <h1>Soma de Valores</h1>
    <form method="post" action="">
        <label for="valores">Informe os valores separados por ponto e vírgula (;):</label>
        <input type="text" id="valores" name="valores" required>
        <input type="submit" value="Calcular Soma">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valores = $_POST['valores'];

        $array_valores = explode(";", $valores);

        $soma = 0;

        foreach ($array_valores as $valor) {
            $soma += (float) $valor;
        }

        echo "<p>A soma dos valores é: $soma</p>";
    }
    ?>
</body>
</html>
