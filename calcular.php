<?php 
//Obter os dados(entrada)
$nome= $_POST['tnome'];
$anoNasc= (int) $_POST['tano'];
$anosAtual= (int) date('Y'); 

$idade = $anosAtual - $anoNasc;

$dias = $idade * 365.25;
$horas = $dias * 24;
$minutos = $horas * 60;

$bpmMedio = 75;
$respiracoesPorMinuto = 17;

$batimentosTotais = 75 * $minutos;
$respiracoesTotais = 17 * $minutos;

$expectativaVida = 95;
$anosRestantes = 95 - $idade;
$batimentosRestantes = ($expectativaVida * 365.25 * 24 * 60 * $bpmMedio) - $batimentosTotais;
$respiracoesRestantes = $batimentosRestantes * $respiracoesPorMinuto;


?>  
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempo de vida</title>
</head>
<body>
     
    <h1>Tempo de Vida</h1>
    <hr>
    <h2><?php echo $nome ?> sua idade é: <?php echo $idade ?> anos</h2>
    <h3><?php echo $nome ?> seu total de dias vividos é: <?php echo number_format( $dias,0,",",".") ?>, e seu total de horas vividas são: <?php echo number_format( $horas,0,",",".") ?> e um total de: <?php echo number_format( $minutos,0,",",".") ?> minutos vividos</h3>
    <h3>Seu total de batimentos são: <?php echo number_format( $batimentosTotais,0,",",".") ?> e seu número de respirações totais são de: <?php echo number_format( $respiracoesTotais,0,",",".") ?></h3>
    <h3>Seus anos de vida restantes são de: <?php echo number_format( $anosRestantes,0,",",".") ?></h3>, já seus batimentos restantes são o total de: <?php echo number_format( $batimentosRestantes,0,",",".") ?> e por final seu total de respirações restantes são de: <?php echo number_format( $respiracoesRestantes,0,",",".") ?></h3>
</body>
</html>