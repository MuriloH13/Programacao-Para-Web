<!DOCTYPE html>
<html>
<head>
    <title>Produto de Matrizes</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        td, th {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Produto de Matrizes 3x3</h1>
    <?php
    3
    $matrizA = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    
    $matrizB = [
        [9, 8, 7],
        [6, 5, 4],
        [3, 2, 1]
    ];
    
    
    $matrizC = [
        [0, 0, 0],
        [0, 0, 0],
        [0, 0, 0]
    ];
    
    
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $matrizC[$i][$j] = 0;
            for ($k = 0; $k < 3; $k++) {
                $matrizC[$i][$j] += $matrizA[$i][$k] * $matrizB[$k][$j];
            }
        }
    }
    
    
    function exibirMatriz($matriz, $nome) {
        echo "<h2>$nome</h2>";
        echo "<table>";
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {
                echo "<td>" . $matriz[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    
    /
    exibirMatriz($matrizA, 'Matriz A');
    exibirMatriz($matrizB, 'Matriz B');
    exibirMatriz($matrizC, 'Matriz Produto (C)');
    ?>
</body>
</html>
