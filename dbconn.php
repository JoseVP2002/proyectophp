<?php
/*
Para hacer la base de datos solo se debe crear llamandola "usuarios_inu_nihongo" con una tabla llamada "usuarios"
Donde se tienen 3 columnas: "id" (llave primaria) - int(11) + AUTO_INCREMENT, "usuario" - varchar(40), "pwd" - varchar(40)

Y ya pueden crear sus usuarios en register.html para que iniciar sesion en index.php
*/



$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'usuarios_inu_nihongo';

    

    $conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

    if(!$conn) {
            echo "Connection Failed";

    }

    ?>