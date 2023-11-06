<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/treino2.php/style.css">
</head>

<body>

  <?php
  $valor = $_GET ['seg'] ?? 0;
  ?>

  <main>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="seg">Valor de segundos</label>
      <input type="number" name="seg" id="seg" value="<?= $valor ?>">
      <input type="submit" value="Calcular">
    </form>
  </main>

<section id="Soma">
  <h2>Resultado</h2>
<?php 
$sobra = $valor;
//Total de Semanas
$semana = (int)($sobra / 604_800);
$sobra = $sobra % 604_800;
//Dias
$dias = (int)($sobra / 86_400);
$sobra = $sobra % 86_400;
//Horas
$hora = (int) ($sobra / 3_600);
$sobra = $sobra % 3_600;
//Minutos
$minutos = (int) ($sobra / 60);
$sobra = $sobra % 60;
//Segundos
$segundos =$sobra;
?>
</section>
<section>
<h2>Totalizando tudo</h2>
<p>Analisando o valor que voce digitou <strong><?= number_format($valor, 0 , ",", ".")?> </strong> de  segundos resulto em:</p>
<ul>
  <li><?=$semana ?> semanas</li>
  <li><?=$dias ?> dias</li>
  <li><?=$hora?> Horas</li>
  <li><?=$minutos?> Minutos</li>
  <li><?=$segundos?> Segundos</li>


</ul>


</section>

</body>

</html>