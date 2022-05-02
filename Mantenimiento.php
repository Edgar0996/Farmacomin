
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon.png" >
    <title>Mantenimiento | EyTec</title>
</head>
<body>



<?php  include("header/cabecera.php"); ?>
    
<div class="row">
        <div class="col s12 m12">

            <!--Parallax-->
            <div class="parallax-container section">
                <div class="parallax">
                    <img src="images/soporte-tecnico.jpg">
                </div>

                <div class="container">
                    <div class="row ">
                        <div class="col s12 m12">
                            <h2 class="white-text">Soluciones Informáticas</h2>
                            <span class="white-text">Mantenimiento Preventivo y Correctivo </span>
                        </div>
                    </div>
                </div>

            </div>
            <!--Parallax-->
        </div>

    </div>





  <!--Sección de contacto -->
  <div class="container section">
    <form class="form-horizontal">
      <div class="card-panel z-depth-5">
        <div class="row">
          <div class="col s12 m12">
            <h4>Contáctenos</h4>
          </div>
        </div>

        <div class="row">
          <div class="col s12 m4 input-field">
            <input id="nombre" type="text" class="validate" required>
            <label for="nombre">Nombre Completo </label>
            <span class="helper-text" data-error="Ingresa un nombre" data-success="correcto"></span>
          </div>

          <div class="col s12 m4 input-field ">
            <input id="correo" type="email" class="validate" required>
            <label for="correo">Correo electrónico </label>
            <span class="helper-text" data-error="Ingresa un correo electrónico" data-success="correcto"></span>
          </div>

          <div class="col s12 m4 input-field">
            <input id="input_text" type="text" class="validate" data-length="10" required>
            <label for="input_text">Telefono</label>
            <span class="helper-text" data-error="Ingresa tu numero telefonico" data-success="correcto"></span>
          </div>

        </div>

        <div class="row">
          <div class="col s12 m8 input-field">
            <textarea id="areaTexto" class="materialize-textarea" required></textarea>
            <label for="areaTexto">Asunto </label>
            <span class="helper-text" data-error="Redacta un mensaje" data-success="correcto"></span>
          </div>

          <div class="col s12 m3 center">
            <button class="btn-floating btn-large waves-effect waves-light tooltipped" data-position="left"
              data-tooltip="Enviar" type="submit" name="action">
              <i class="material-icons ">send</i>
            </button>
            <button class="btn-floating btn-large waves-effect waves-light red tooltipped" data-position="right"
              data-tooltip="Deshacer" type="reset" name="action">
              <i class="material-icons ">redo</i>
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
  <!--Fin de sección de contacto -->


<?php  include("footer/pie.php"); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="js/javascript.js"></script>

</body>
</html>

    
