<?php
/* PAGINA DE INICIO/HOME PAGE

Esta es la pagina de inicio con la que valide el login una vez que se inicia sesion, manda a llamar
al nombre del usuario y le da la bienvenida, se desechara una vez que se tenga el menu principal final.

*/
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['usuario']) ) {


?>

<html>

<head>

    <title>HOME</title>


</head>

<body>

     <h1>Hello, <?php echo $_SESSION['usuario']; ?></h1>

     <a href="logout.php">Logout</a>

     <a href="contactarsoporte.php">Contactar a soporte</a>

</body>

</html>
<?php
}
else {
    header("Location: index.php");
    exit();
}

?>
