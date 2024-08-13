<!DOCTYPE html>
<html>
<head>
    <title>Classificação de Triângulos</title>
</head>
<body>
    <h1>Classificação de Triângulos</h1>
    <form method="post" action="">
        <label for="lado1">Lado 1:</label>
        <input type="number" id="lado1" name="lado1" step="0.01" required><br><br>
        <label for="lado2">Lado 2:</label>
        <input type="number" id="lado2" name="lado2" step="0.01" required><br><br>
        <label for="lado3">Lado 3:</label>
        <input type="number" id="lado3" name="lado3" step="0.01" required><br><br>
        <input type="submit" value="Classificar Triângulo">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado1 = $_POST['lado1'];
        $lado2 = $_POST['lado2'];
        $lado3 = $_POST['lado3'];

        if (($lado1 + $lado2 > $lado3) && ($lado1 + $lado3 > $lado2) && ($lado2 + $lado3 > $lado1)) {
            if ($lado1 == $lado2 && $lado2 == $lado3) {
                echo "<p>Triângulo Equilátero: Todos os lados são iguais.</p>";
            } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
                echo "<p>Triângulo Isósceles: Dois lados são iguais.</p>";
            } else {
                echo "<p>Triângulo Escaleno: Todos os lados são diferentes.</p>";
            }
        } else {
            echo "<p>Os valores fornecidos não podem formar um triângulo.</p>";
        }
    }
    ?>
</body>
</html>
