
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Dados</title>
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

body {
    font-family: 'Open Sans', sans-serif;
    background-color: rgb(28,32,99);
    color: white;
    font-size: 150%;
    
} 

tr,th,td{
    color:white;
}

</style>

<div class="table-area">
    <div style="width:100%;text-align:center;margin-bottom:30px">
    <a href="hub.php"><img src="./images/login-ico.png" width=120px></a>
    </div>
    <h2 style="color:white"><b>Passageiros</b></h2>
    <br>
    <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-link noselect" style="color:white" id="p0 nav-home-tab" onclick="changeTable(0)" data-bs-toggle="tab" role="presentation" aria-controls="nav-home" aria-selected="true">Voo 1</a>
        <a class="nav-link noselect" style="color:white" id="p1 nav-profile-tab" onclick="changeTable(1)" data-bs-toggle="tab" role="presentation" aria-controls="nav-profile" aria-selected="false">Voo 2</a>
        <a class="nav-link noselect" style="color:white" id="p2 nav-contact-tab" onclick="changeTable(2)" data-bs-toggle="tab" role="presentation" aria-controls="nav-contact" aria-selected="false">Voo 3</a>
    </div>
    </nav>
    <div id="nav-tabContent">
        <table id="0" role="tabpanel" aria-labelledby="nav-home-tab" class="table table-striped table-sm fade show active">
            <tr>
                <td>Breno Silva</td>
                <th>CPF</th><td>479.357.35-20</td>
            </tr>
            <tr>
                <td>Carlos Andrade</td>
                <th>CPF</th><td>329.457.75-10</td>
            </tr>
            <tr>
                <td>Anderson Bernardes</td>
                <th>CPF</th><td>539.376.23-27</td>
            </tr>
            <tr>
                <td>Marcos Cunha</td>
                <th>CPF</th><td>395.493.53-03</td>
            </tr>
        </table>
        <table id="1" role="tabpanel" aria-labelledby="nav-home-tab" class="table table-striped table-sm fade show active">
        <tr>
                <td>Marcelo Santana</td>
                <th>CPF</th><td>749.336.68-20</td>
            </tr>
            <tr>
                <td>Maria Luisa</td>
                <th>CPF</th><td>524.457.28-39</td>
            </tr>
            <tr>
                <td>Sandra Lopez</td>
                <th>CPF</th><td>539.376.23-63</td>
            </tr>
            <tr>
                <td>Lucas Lopez</td>
                <th>CPF</th><td>395.567.56-03</td>
            </tr>
        </table>
        <table id="2" role="tabpanel" aria-labelledby="nav-home-tab" class="table table-striped table-sm fade show active">
        <tr>
                <td>Lucas Silva</td>
                <th>CPF</th><td>829.336.68-82</td>
            </tr>
            <tr>
                <td>Mariana Santos</td>
                <th>CPF</th><td>482.927.28-89</td>
            </tr>
            <tr>
                <td>Bernardo Neto</td>
                <th>CPF</th><td>924.385.23-43</td>
            </tr>
            <tr>
                <td>Felipe Cunha</td>
                <th>CPF</th><td>295.593.56-03</td>
            </tr>
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