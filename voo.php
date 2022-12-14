<?php
require ('./config/database.php');	
ini_set('display_errors', 'Off');

echo ('<!DOCTYPE html><html><head>
<meta http-equiv="refresh" content="10">
<link rel="stylesheet" type="text/css" href="/css/depstyle.css">
<meta name="google" value="notranslate"><link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head><body>');

$tquery = 'SELECT * FROM `voos` WHERE flight = "'.$_GET['id'].'";';
$ttable = mysqli_query($mysqli, $tquery);

if(!$ttable){
	echo('<p>Oops, Try again</p>');
} else {
	echo ('<div style="position: fixed; top: 0px; left: 0px; width: 100%; height:7.5%; background-color: green; text-align: right; vertical-align: middle; line-height: 200%;  "><marquee>OS VOOS PODEM ATRASAR DEVIDO A PROBLEMAS TÉCNICOS - PARA MAIS INFORMAÇÕES VÁ ATÉ O BLOCO 3 DO AEROPORTO</marquee></div>');
	echo ('<div style="position: fixed; bottom: 0px; left: 0px; width: 100%; height:7.5%; background-color: rgb(39,40,34); text-align: right; vertical-align: middle; line-height: 200%;  ">Local Time : '.date("H:i").' &nbsp | <a style="color:white" href="hub.php">Administração</a>  |</div>');

	while (list($airline,$flight,$dest,$time,$gate,$status)=mysqli_fetch_row($ttable)){
	echo '<br><br><a style="color:white" href=/>< Voltar</a><h3>Informações do voo '.$flight.'</h3>';
	echo '<table border="0" cellpadding="1" cellspacing="10" width="100%">';


	
	echo '<tr><td>Companhia Aérea: '.$airline.'</td><td>Número de Indentificação do Voo: '.$flight.'</td></tr>';
	echo '<tr></tr>';
	echo '<tr><td>Destino: '.$dest.'</td><td>Horário para Embarque'.$time.'</td></tr>';
	echo '<tr></tr>';
	echo '<tr><td>Local: '.$gate.'</td>';

	if ($status=='Embarque') {
		echo '<td>Status: <boarding style="color:rgb(0,226,85);">'.$status.'</boarding></td>';
	}elseif ($status=='Cancelado') {
		echo '<td>Status: <delay style="color:red;">'.$status.'</delay></td>';
	}elseif ($status=='Atrasado') {
		echo '<td>Status: <delay style="color:red;">'.$status.'</delay></td>';
	}else {echo '<td>'.$status.'</td>';}

	echo '</tr>';

}}

echo '</table>';
echo ('</body>');
echo ('</html>');

?>