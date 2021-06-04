<?php
  require_once 'vendor/autoload.php';

  use Illuminate\Database\Capsule\Manager as Capsule;
  use App\Models\enlace;

  $capsule = new Capsule;

  $capsule->addConnection([
      'driver'    => 'mysql',
      'host'      => '127.0.0.1:3306',
      'database'  => 'login',
      'username'  => 'root',
      'password'  => 'root',
      'charset'   => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix'    => '',
  ]);

  $capsule->setAsGlobal();
  $capsule->bootEloquent();

  if(!empty($_POST)){
      $per = new enlace();
      $per -> nombre = $_POST['nombre'];
      $per -> apellido = $_POST['apellido'];
      $per -> correo = $_POST['correo'];
      $per -> contrasena = $_POST['contrasena'];
      $per -> save();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body id="body">
    <nav>
        <div class="nav-wrapper cont">
          <a href="#" class="brand-logo">JS0N_Page</a>
         <div class="nave"></div>
        </div>
      </nav>

      <div class="cont bots">
        <a class="waves-effect waves-light btn colpse" id="colapsar">Ocultar</a>
          <a class="waves-effect waves-light btn uno" id="bot1" onclick="saludar()">Negro</a>
          <a class="waves-effect waves-light btn dos" id="bot2" onclick="despedir()">Gris</a>
      </div>

      <section class="formulario">
        <div class="row">
          <div class="col m2 l2"></div>
          <form id="forms" class="col s12 m8 l8" action="index.php" method="post">
            <div class="row">
              <div class="input-field col s6">
                <input placeholder="Nombre*" name="nombre" id="first_name" type="text" class="validate">
              </div>
              <div class="input-field col s6">
                <input placeholder="Apellidos" name="apellido" id="last_name" type="text" class="validate">
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Correo*" name="correo" id="email" type="email" class="validate">
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Contraseña*" id="password" type="password" class="validate" name="contrasena">
              </div>
            </div>
            <label>
              <input type="checkbox" id="check" />
              <span>Terminos y condiciones</span>
            </label><br>
            <label>
              <input type="checkbox" id="check2" />
              <span>No soy un robot</span>
            </label><br>
            <button class="waves-effect waves-light btn" id="send" value="submit">Enviar</button>
          </form>
        </div>
      </section>

      <section class="cont">
        <div class="row">
          <div class="col m2 l2"></div>
          <div class="seccion3 col s12 m8 l8"></div>
        </div>
      </section>  
      
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <script type="text/javascript" src="event.js"></script>
</html>

