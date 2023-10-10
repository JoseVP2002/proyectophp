<?php
//PAGINA DE LOGIN / INICIAR SESION 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Inicio de sesión</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <!-- Agrega el icono del navegador -->
      <link rel="icon" href="img/6.png" type="image/x-icon">
      <link rel="shortcut icon" href="img/6.png" type="image/x-icon">
      <link rel="icon" href="img/6.png" type="image/png">
  <style>
    body {
      background-image: url('img/fondologin.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 90vh;
      margin: 0;
    }

    .white-box-container {
      text-align: center;
    }

    .white-box {
      background-color: white;
      padding: 20px;
      color: black;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
      text-align: center;
      max-width: 500px;
      margin: 0 auto;
    }
  </style>
</head>

<body>
  <div class="container white-box-container">
    <div class="row">
      <div class="col-xs-12">
        <div class="white-box">
          <form action="login.php" method="POST">
            <?php if(isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error'];?></p>
            <?php } ?>
            <h2>Inicio de sesión</h2><br>
            <div class="form-group">
              <label for="usuario">Nombre de usuario:</label>
              <input type="text" class="form-control" id="usuario" placeholder="Ingresa tu nombre de usuario" name="usuario" required>
            </div>
            <div class="form-group">
              <label for="pwd">Contraseña:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Ingresa tu contraseña" name="pwd" required>
            </div>
            <a href="register.html">Crear cuenta nueva</a>
       
            <div class="mb-4 mt-4"><br>
              <button type="submit" class="btn btn-danger">Ingresar</button>
            </div>
            <br><a href="inicio.html">Acceder como invitado</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>