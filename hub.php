
<?php
session_start();
if(!isset($_SESSION['userid'])){
    header('location: login.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
<style>

.table-area{
    margin-top: 100px;
    position: absolute;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 500px;
    height:100px;
    text-align:center;
}

.nav-link{
    color:white;
}.nav-link:hover{
    color:grey;
}

.noselect {
  -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome, Edge, Opera and Firefox */
}

body {
    font-family: 'Open Sans', sans-serif;
    background-color: rgb(28,32,99);
    color: white;
    font-size: 150%;
    
} 

</style>

<div class="table-area">
    <div style="width:100%;text-align:center;margin-bottom:30px">
        <img src="./images/login-ico.png" width=150px>
    </div>
    <h3 style="color:white"><b>Dashboard do Aeroporto</b></h3>
    <br>
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="index.php" role="tab" aria-controls="v-pills-home" aria-selected="true">Ver Voos</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="enviar.php" role="tab" aria-controls="v-pills-profile" aria-selected="false">Alterar Horário dos Voos</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="passageiros.php" role="tab" aria-controls="v-pills-profile" aria-selected="false">Dados dos Passageiros</a>
      <br>
      <form action="logout.php" method="POST">
        <button class="nav-link" style="background:rgb(28,32,99);border:none;color:white;width:100%" id="v-pills-settings-tab" data-toggle="pill" href="#" value="index.php" name="redirect" role="tab" aria-controls="v-pills-settings" aria-selected="false">Sair</button>
      </form>
    </div>
    </div>
</body>
</html>