<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Média</title>
</head>
<body>
    <h1>Calculadora de Média</h1>

    <?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];
        $nota4 = $_POST["nota4"];

       
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

     
        if ($media >= 7.5) {
            $resultado = "Aprovado";
        } elseif ($media >= 3 && $media < 7.5) {
            $resultado = "Recuperação";
        } else {
            $resultado = "Reprovado";
        }

        // Exibe o resultado
        echo "<p>A média do estudante é: $media</p>";
        echo "<p>Situação: $resultado</p>";
        
    }
    ?>
    
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" step="0.1" required><br>

        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" step="0.1" required><br>

        <label for="nota3">Nota 3:</label>
        <input type="number" name="nota3" step="0.1" required><br>

        <label for="nota4">Nota 4:</label>
        <input type="number" name="nota4" step="0.1" required><br>

        <input type="submit" value="Calcular Média">
    </form>
    </body>
</html>