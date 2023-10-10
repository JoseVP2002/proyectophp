<?php
//ARCHIVO DE LOGIN PARA PROCESAR INICIO DE SESION CON BASE DE DATOS SQL

session_start();
include "dbconn.php"; //En teoria llamando a session_start(); e include "dbconn.php"; se manda a llamar o conectar al usuario con el que se inicio sesion
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'usuarios_inu_nihongo';

$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['usuario']) && isset($_POST['pwd'])) {
    $user = validate($_POST['usuario']); 
    $pass = validate($_POST['pwd']);

    if (empty($user)) {
        header("Location: index.php?error=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location: index.php?error=Password is required");
        exit();
    }
}//usuario user_name
$sql = "SELECT * FROM usuarios WHERE usuario = '$user' AND pwd='$pass'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if($row['usuario'] === $user && $row['pwd'] === $pass) {
        echo "Logged In!";
        $_SESSION['usuario'] = $row['usuario'];
       
        $_SESSION['id'] = $row['id'];
        header("Location: inicio.html");
        exit();
    }
    else {
        header("Location: index.php");
        exit();
    }

  }
else {
    echo "error";
    exit();
}


?>