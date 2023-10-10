<?php
/*
PAGINA DE CONTACTO A SOPORTE

*/


session_start();

if(isset($_SESSION['id']) && isset($_SESSION['usuario']) ) {


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contactar Soporte</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Agrega el icono del navegador -->
    <link rel="icon" href="img/6.png" type="image/x-icon">
  <link rel="shortcut icon" href="img/6.png" type="image/x-icon">
  <link rel="icon" href="img/6.png" type="image/png">

  <title>Formulario de Soporte Técnico</title>

  <style>
    
        body {
            background-color: rgb(248, 207, 230);
            background-image: url('img/fondosoporte.jpg'); /* Ruta de tu imagen local */
            background-size: cover; /* Ajustar imagen al tamaño de la ventana del navegador */
            background-repeat: no-repeat; /* No repetir la imagen */
            background-attachment: fixed; /* Fijar la imagen de fondo */
        }
        .navbar {
            background-color: rgb(255, 255, 255);
        }
        .navbar-brand {
            color: red;
        }
        .nav-link {
            color: red;
        }
        .carousel-item {
            height: 500px;
        }
        .carousel-item img {
            height: 100%;
            object-fit: cover;
        }
        p{
          font-size: 20px;
          text-align: justify
        }
        body {
           color: black;
        }
    
      
    </style>

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">InuNihongo</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="inicio.html">Inicio</a></li>
        <li><a href="misionvision.html">Acerca De</a></li>
        <li><a href="contactarsoporte.php">Soporte</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                aria-expanded="false">Niveles <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">N1</a></li>
            <li><a href="#">N2</a></li>
            <li><a href="#">N3</a></li>
            <li><a href="#">N4</a></li>
            <li><a href="N5/Introduccion.html">N5</a></li>
          </ul>
        <li><a href="#">Certificacion</a></li>
        <li><a href="#">Escuelas</a></li>
      </ul>
    </div>
  </nav>
  
  <div class="container">
    <br><h2><b>Contactar a soporte</h2><br></b>
    <p>Hola! en Inu-Nihongo nos esforzamos por ayudar a todos nuestros usuarios, si deseas contactarnos para resolver alguna problematica, duda, o dar una
      sugerencia, utiliza el siguiente formulario y uno de nuestros colaboradores se pondra en contacto contigo lo mas pronto posible.</p><br>
  
    <form action="procesar_soporte.php" method="post">
      <div class="form-group">
        <label for="username"><p>Nombre de Usuario:</p></label>
        <input type="text" style="font-size: 20px;" class="form-control" value="<?php echo $_SESSION['usuario']; ?>" id="username" name="username" required readonly>
      </div>
      <div class="form-group">
        <label for="email"><p>Correo electrónico al que desees ser contactado:</p></label>
        <input type="email" style="font-size: 20px;" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message"><p>Mensaje sobre problemática, duda o sugerencia (máx. 250 caracteres):</p></label>
        <textarea class="form-control" style="font-size: 18px;" id="message" name="message" maxlength="250" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn btn-danger btn-lg">Enviar</button>  
    </form>
  </div>
</body>

</html>

<?php
}
else {
    header("Location: index.php");
    exit();
}
?>