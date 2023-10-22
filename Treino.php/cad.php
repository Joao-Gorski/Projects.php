<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Treino.php/style.css">
</head>
<body>
    <h1>Escolhe o horario</h1>
   <main>
<form action="test.php" method="$_GET">
    <?php 
    
     $n = $_GET["nome"] ?? "desconhecido";
     $s = $_GET["sobrenome"] ?? "Sem nome";//hyper-text preprocesseser// pre processamento de hiper texto
     echo "<p>SEJA BEM VINDO, <strong>$n $s </strong>!";
     echo "<button> 18:40";
     echo "<button> 19:00";
     echo "<button>  20:00";
    
    
    ?>
</form>
    </main>



</body>
</html>