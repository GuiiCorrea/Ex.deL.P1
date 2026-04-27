<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Média</title>
</head>
<body>
    <?php
    
    if(isset($_GET['nota1']) && isset($_GET['nota2']) && isset($_GET['nota3']) && isset($_GET['nota4']) && isset($_GET['nameAluno'])) {
        $nome = trim($_GET['nameAluno']);
        $nota1 = $_GET['nota1'];
        $nota2 = $_GET['nota2'];
        $nota3 = $_GET['nota3'];
        $nota4 = $_GET['nota4'];

      
        if (is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4)) {
            $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
            echo "A média de " . htmlspecialchars($nome) . " é: " . number_format($media, 2);
        } else {
            echo "Por favor, insira apenas números válidos para as notas.";
        }
    } else {
        echo "Por favor, preencha o nome do aluno e todas as notas.";
    }
    ?>

</body>
</html>
