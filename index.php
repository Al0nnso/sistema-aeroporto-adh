<?php
require ('./config/database.php');	
ini_set('display_errors', 'Off');

echo ('<!DOCTYPE html><html><head>
<meta http-equiv="refresh" content="10">
<link rel="stylesheet" type="text/css" href="/css/depstyle.css">
<meta name="google" value="notranslate"><link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head><body>');

$tquery = 'SELECT * FROM `voos`';
$ttable = mysqli_query($mysqli, $tquery);

if(!$ttable){
	echo('<p>Oops, Try again</p>');
} else {
	echo ('<div style="position: fixed; top: 0px; left: 0px; width: 100%; height:7.5%; background-color: green; text-align: right; vertical-align: middle; line-height: 200%;  "><marquee>OS VOOS PODEM ATRASAR DEVIDO A PROBLEMAS TÉCNICOS - PARA MAIS INFORMAÇÕES VÁ ATÉ O BLOCO 3 DO AEROPORTO</marquee></div>');
	echo ('<div style="position: fixed; bottom: 0px; left: 0px; width: 100%; height:7.5%; background-color: rgb(39,40,34); text-align: right; vertical-align: middle; line-height: 200%;  ">Local Time : '.date("H:i").' &nbsp | <a style="color:white" href="hub.php">Administração</a>  |</div>');
	echo '<table border="0" cellpadding="1" cellspacing="10" width="100%">';
	echo '<tr>';
	echo '<td>Voos</td>';	
	echo '</tr>';
	echo '</table>';
	echo '<table border="0" cellpadding="1" cellspacing="10" width="100%">';
	echo '<colgroup><col style="width:5%"><col style="width:15%"><col style="width:5%"><col style="width:25%"><col style="width:10%"><col style="width:10%"><col style="width:15%"></colgroup> ';
	echo '<tr><td>Voo</td><td></td><td>Número</td><td>Destino</td><td>Horário</td><td>Bloco</td><td>Status</td></tr>';

	while (list($airline,$flight,$dest,$time,$gate,$status)=mysqli_fetch_row($ttable)){
	
	echo '<tr>';
	echo '<td><img src="images/default.png" style="width:50px;height:39px" ></td>';	
	echo '<td>'.$airline.'</td>';
	echo '<td>'.$flight.'</td>';
	echo '<td>'.$dest.'</td>';
	echo '<td>'.$time.'</td>';
	echo '<td>'.$gate.'</td>';

	if ($status=='Boarding') {
		echo '<td><boarding style="color:rgb(0,226,85);">'.$status.'</boarding></td>';
	}elseif ($status=='Canceled') {
		echo '<td><delay style="color:red;">'.$status.'</delay></td>';
	}elseif ($status=='Closed') {
		echo '<td><delay style="color:red;">'.$status.'</delay></td>';
	}else {echo '<td>'.$status.'</td>';}

	echo '</tr>';

}}

echo '</table>';
echo ('</body>');
echo ('</html>');

?>