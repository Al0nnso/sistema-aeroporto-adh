<?php
session_start();
if(!isset($_SESSION['userid'])){
    header('location: login.php');
    die();
}

require 'config/database.php';
if($_SERVER['REQUEST_METHOD'] == "GET"){

    $trocar_hora = "UPDATE aeroporto.voos SET time = '".$_GET['valor']."' WHERE flight='".$_GET['id']."';";

    if ($mysqli->query($trocar_hora)) {
      header('location: index.php');
    } else {
      header('location: error.php?message='.mysqli_error($mysqli));
    }

  }
?>