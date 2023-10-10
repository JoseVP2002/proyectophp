<?php

//ARCHIVO DE REGISTER PARA PROCESAR REGISTRO CON BASE DE DATOS SQL

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'usuarios_inu_nihongo';

$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_error()) {
    exit('Error al conectarse a la base de datos' . mysqli_connect());
}

if (!isset($_POST['usuario'], $_POST['pwd'])) {
    exit('Campo(s) vacio(s)');
}

if (empty($_POST['usuario']) || empty($_POST['pwd'])) {
    exit('Valores vacios');
}

if ($stmt = $conn->prepare('SELECT id, pwd FROM usuarios WHERE usuario = ?')) {
    $stmt->bind_param('s', $_POST['usuario']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo 'El usuario ya existe, intenta de nuevo';
    } else {
        if ($stmt = $conn->prepare('INSERT INTO usuarios (usuario, pwd) VALUES (?, ?)')) {
            $stmt->bind_param('ss', $_POST['usuario'], $_POST['pwd']);
            $stmt->execute();
           
/*De la linea 38 a la 99 es el HTML que se muestra al usuario una vez que su registro fue exitoso */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registro exitoso</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" href="img/6.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/6.png" type="image/x-icon">
    <link rel="icon" href="img/6.png" type="image/png">
    <style>
        body {
            background-image: url('img/fondoregister.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .white-box {
            background-color: white;
            padding: 20px;
            color: black;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            display: flex;
            height: 400px;
            width: 42%;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }
    </style>
</head>
<body><center>
    <div class="container white-box-container">
        <div class="row">
            <div class="col-xs-12">
                <div class="white-box">
                    <img src="img/5.png" alt="Akita" width="150" height="100">
                    <h1>Registro exitoso!</h1>
                    <h2>Bienvenido a la comunidad de <br>Inu-Nihongo</h2>
                    <div class="form-check mb-3">
                        <a href="index.php"><br>
                            <button type="button" class="btn btn-success">Iniciar Sesion</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <<br>
    <<br>
</body>
</html>


        <?php } else {
            echo 'Ha ocurrido un error';
        }
    }
    $stmt->close();
} else {
    echo 'Ha ocurrido un error';
}
$conn->close();
?>