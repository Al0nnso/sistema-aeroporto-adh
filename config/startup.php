<?php

/*
CREATE DATABASE aeroporto;
CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';
GRANT ALL PRIVILEGES ON `aeroporto`.* TO 'admin'@'localhost';
*/

require 'database.php';

$voos = "CREATE TABLE `aeroporto`.`voos` ( `airline` TEXT NOT NULL ,`flight` TEXT NOT NULL , `dest` TEXT NOT NULL, `time` TEXT NOT NULL , `gate` TEXT NOT NULL , `status` TEXT NULL)";

$voo1="INSERT INTO `aeroporto`.`voos` VALUES ('Volée Airlines', 'JA52', 'Japão (Tokyo)','19:00','Gate 1','Embarque');";
$voo2="INSERT INTO `aeroporto`.`voos` VALUES ('Latam Airlines', 'BR53', 'Minas Gerais (Belo Horizonte)','5:30','Gate 1','Embarque');";
$voo3="INSERT INTO `aeroporto`.`voos` VALUES ('Quatar Airlines', 'CO54', 'Coreia do Sul (Seul)','14:00','Gate 2','Embarque');";
$voo4="INSERT INTO `aeroporto`.`voos` VALUES ('Latam Airlines', 'EU55', 'Estados Unidos (Nova York)','17:40','Gate 1','Cancelado');";
$voo5="INSERT INTO `aeroporto`.`voos` VALUES ('Volée Airlines', 'BR56', 'Rio Grande do Sul (Porto Alegre)','11:00','Gate 2','Embarque');";
$voo6="INSERT INTO `aeroporto`.`voos` VALUES ('GOL Airlines', 'QA57', 'Qatar (Doha)','11:30','Gate 4','Atrasado');";

if ($mysqli->query($voos) === TRUE 
&& $mysqli->query($voo1) === TRUE 
&& $mysqli->query($voo2) === TRUE 
&& $mysqli->query($voo3) === TRUE
&& $mysqli->query($voo4) === TRUE
&& $mysqli->query($voo5) === TRUE
&& $mysqli->query($voo6) === TRUE
 ) {
    echo "<br>Tabela de voos criada com sucesso";
} else {
    echo "<br>Erro ao criar tabela de voos: " . $mysqli->error;
}

$users = "CREATE TABLE `aeroporto`.`users` ( `id` TEXT NOT NULL ,`email` TEXT NOT NULL , `senha` TEXT NOT NULL)";

$user1= "INSERT INTO `aeroporto`.`users` VALUES ('1', 'administracao@latam.com', 'latam@Gh&s39Skj');";
$user2= "INSERT INTO `aeroporto`.`users` VALUES ('2', 'tecnico@latam.com', 'senhaforte123');";

if ($mysqli->query($users) === TRUE && $mysqli->query($user1) === TRUE && $mysqli->query($user2) === TRUE) {
    echo "<br>Tabela de usuarios criada com sucesso";
} else {
    echo "<br>Erro ao criar tabela de voos: " . $mysqli->error;
}

?>
