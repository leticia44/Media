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
    </body>
</html>