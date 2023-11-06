<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treino_PhP</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<main>
    
    <h1>Conversor de moedas</h1>
<?php 
$inicio = date("m-d-Y", strtotime("-7 days")) ;
$fim = date("m-d-Y") ;
 $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27'. $inicio .'%27&@dataFinalCotacao=%27' . $fim . '%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

 $dados = json_decode(file_get_contents($url), true);

 //var_dump($dados);

 $cotação = $dados["value"][0] ["cotacaoCompra"];  
 
 $real = $_GET["din"] ?? 0;

 $dolar = $real / $cotação;

  $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

 echo "<p>Seus ", numfmt_format_currency($padrão, $real, "BRL"), "  equivalem a <strong>" . numfmt_format_currency($padrão, $dolar, "USD") . "</strong></p>";     
 ?>
 <p class="fot"> Usando a cotação atual do <a href = https://www.bcb.gov.br> Banco Central</a></p>
 <button onclick="javascript:history.go(-1)">Voltar</button>
 
    </main>
</body>
</html>