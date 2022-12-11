<?php

/*
CREATE DATABASE aeroporto;
CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';
GRANT ALL PRIVILEGES ON `aeroporto`.* TO 'admin'@'localhost';
*/

require 'database.php';

$voos = "CREATE TABLE `aeroporto`.`voos` ( `airline` TEXT NOT NULL ,`flight` TEXT NOT NULL , `dest` TEXT NOT NULL, `time` TEXT NOT NULL , `gate` TEXT NOT NULL , `status` TEXT NULL)";

$voo1="INSERT INTO `aeroporto`.`voos` VALUES ('Volée Airlines', 'BN52', 'Tokyo (Narita)','19:00','Gate 1','Boarding');";

if ($mysqli->query($voos) === TRUE && $mysqli->query($voo1) === TRUE) {
    echo "<br>Tabela de voos criada com sucesso";
} else {
    echo "<br>Erro ao criar tabela de voos: " . $mysqli->error;
}

$users = "CREATE TABLE `aeroporto`.`users` ( `id` TEXT NOT NULL ,`email` TEXT NOT NULL , `senha` TEXT NOT NULL)";

$user1= "INSERT INTO `aeroporto`.`users` VALUES ('1', 'admin@latam.com', 'admin');";

if ($mysqli->query($users) === TRUE && $mysqli->query($user1) === TRUE) {
    echo "<br>Tabela de usuarios criada com sucesso";
} else {
    echo "<br>Erro ao criar tabela de voos: " . $mysqli->error;
}

?>
