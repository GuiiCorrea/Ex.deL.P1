<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['nota1']) && isset($_GET['nota2']) && isset($_GET['nota3']) && isset($_GET['nota4'])) {
        $nome = $_GET['nameAluno'];
        $nota1 = $_GET['nota1'];
        $nota2 = $_GET['nota2'];
        $nota3 = $_GET['nota3'];
        $nota4 = $_GET['nota4'];

        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        echo "A média de " . $nome . " é: " . $media;
    }else {
        echo "Por favor, preencha todas as notas.";
    }
    ?>
    
</body>
</html>
