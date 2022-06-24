<?php
require('../libs/conex.php');
require('../libs/ciudades.lib.php');
require('../libs/personas.lib.php');
require('proceso.php');
$link=conectar();
//print_r($_POST);
//print_r($_GET);

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="../libs/estilo.css" />
     <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
     <title></title>
   </head>
   <body>
     <?php
     require('../libs/menu_reloco.php');
      if (!($_POST) && !($_GET))
      {
        include('list.php');
      }
        elseif ($_GET['mod']=="new")
        {
          $ciudades=mostrarCiudades($link);
          include('form.php');
        }
        elseif ($_GET['mod']=="edit")
        {
        if ($_GET['id'])
        {
          $ciudades=mostrarCiudades($link);
          $res=mostrarPorId($link,$_GET['id']);
          include('form.php');
        }
        }
        elseif ($_GET['mod']=="delete")
        {
            if ($_GET['id']) {
              borrarPersona($link,$_GET);
              include('list.php');
              // code...
            }

        }elseif ($_POST) {
          // code...
          if ($_POST['id']==-1)
          {
            $nfecha=date_parse($_POST['fenac']);
            if ($_POST['nombre']=="" or $_POST['apellido']=="" or $nfecha['error_count'] or $_POST['cin']=="" or !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) or $_POST['email']=="" or $_POST['fenac']=="" ){
              $ciudades=mostrarCiudades($link);
              errores();
            }else{
              $salida= agregarPersona($link,$_POST);
              include('list.php');
            }
            //echo $salida;
          } elseif ($_POST['id']!='') {
            $nfecha=date_parse($_POST['fenac']);
            if ($_POST['nombre']=="" or $_POST['apellido']=="" or $nfecha['error_count'] or $_POST['cin']=="" or !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) or $_POST['email']=="" or $_POST['fenac']=="" ){
              $ciudades=mostrarCiudades($link);
              errores();
            }else{
              $salida= editarPersona($link,$_POST);
              include('list.php');
            }
              
          }
        }

      ?>

  <script src="../libs/app.js" ></script>
   </body>
 </html>
