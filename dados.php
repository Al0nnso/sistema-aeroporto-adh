<?php
session_start();

function getTable(int $table) {
    require 'config/database.php';
    $doc = $_GET['id'];


    $sql = "SELECT * FROM users WHERE id = " . $doc;
    $result = $mysqli -> query($sql);

    // Associative array
    $row = $result -> fetch_assoc();

    $pessoa = [
        [
            [
                "Nome" => $row['nome'],
                "RG" => $row['rg'],
                "CPF" => $row['cpf'],
                "Nascimento"=> substr($row['nascimento'], 8, 2).'/'.substr($row['nascimento'], 5, 2).'/'.substr($row['nascimento'], 0, 4),
                "Sexo"=>$row['sexo'],
                "Saldo"=>$row['saldo'],
            ],
            [
                    "Email"=>$row['email'],
                    "Senha"=>$row['senha'],
            ],
            [
                    "Telefone"=>$row['telefone'],
                    "Celular"=>$row['celular'],
                    "CEP"=>$row['cep'],
                    "Rua"=>$row['rua'],
                    "Bairro"=>$row['bairro'],
                    "Cidade"=>$row['cidade'],
            ]
        ]
    ];
    
    foreach($pessoa[0][$table] as $title => $value){
        echo "
            <tr>
                <th>".$title."<th>
                <td>".$value."</td>
            </tr>
        ";
    }
}

if($_SESSION['userid']){
    if(!isset($_GET['id'])){
        header('location: dados.php?id=' . $_SESSION['userid']);
    } elseif ($_GET['id'] == '') {
        header('location: dados.php?id=' . $_SESSION['userid']);
    }
}else {
    header('location: login.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Dados - Lubank</title>
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

</style>

<div class="table-area">
    <div style="width:100%;text-align:center;margin-bottom:30px">
    <a href="hub.php"><img src="./images/logo.png" width=120px></a>
    </div>
    <h2 style="color:#8a05be"><b>Registro</b></h2>
    <br>
    <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-link noselect" style="color:#8a05be" id="p0 nav-home-tab" onclick="changeTable(0)" data-bs-toggle="tab" role="presentation" aria-controls="nav-home" aria-selected="true">Informações</a>
        <a class="nav-link noselect" style="color:#8a05be" id="p1 nav-profile-tab" onclick="changeTable(1)" data-bs-toggle="tab" role="presentation" aria-controls="nav-profile" aria-selected="false">Conta</a>
        <a class="nav-link noselect" style="color:#8a05be" id="p2 nav-contact-tab" onclick="changeTable(2)" data-bs-toggle="tab" role="presentation" aria-controls="nav-contact" aria-selected="false">Contato</a>
    </div>
    </nav>
    <div id="nav-tabContent">
        <table id="0" role="tabpanel" aria-labelledby="nav-home-tab" class="table table-striped table-sm fade show active">
            <?php
                getTable(0);
            ?>
        </table>
        <table id="1" role="tabpanel" aria-labelledby="nav-home-tab" class="table table-striped table-sm fade show active">
            <?php
                getTable(1);
            ?>
        </table>
        <table id="2" role="tabpanel" aria-labelledby="nav-home-tab" class="table table-striped table-sm fade show active">
            <?php
                getTable(2);
            ?>
        </table>
    </div>
    <script>
        changeTable(0);
        function changeTable(id){
            switch(id){
                case 0:
                    $('#0').show()
                    $('#1').hide()
                    $('#2').hide()
                    $('#p0').addClass('active')
                    $('#p1').removeClass('active')
                    $('#p2').removeClass('active')
                    break
                case 1:
                    $('#0').hide()
                    $('#1').show()
                    $('#2').hide()
                    $('#p0').removeClass('active')
                    $('#p1').addClass('active')
                    $('#p2').removeClass('active')
                    break
                case 2:
                    $('#0').hide()
                    $('#1').hide()
                    $('#2').show()
                    $('#p0').removeClass('active')
                    $('#p1').removeClass('active')
                    $('#p2').addClass('active')
                    break
                default:
                    $('#0').show()
                    $('#1').hide()
                    $('#2').hide()
                    $('#p0').addClass('active')
                    $('#p1').removeClass('active')
                    $('#p2').removeClass('active')
                    break
            }

        }
    </script>
    </div>
</body>
</html>