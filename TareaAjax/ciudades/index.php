<?php
require('../libs/conex.php');
require('../libs/ciudades.lib.php');
require('procesar.php');
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
          include('form.php');
        }
        elseif ($_GET['mod']=="edit")
        {
        if ($_GET['id'])
        {
          $res=mostrarCiudad($link,$_GET['id']);
          include('form.php');
        }
        }
        elseif ($_GET['mod']=="delete")
        {
            if ($_GET['id']) {
              borrarCiudad($link,$_GET);
              include('list.php');
              // code...
            }

        }elseif ($_POST) {
          // code...
          if ($_POST['id']==-1)
          {
            if ($_POST['ciudad']==""){
              errores();
            }else{
            $salida= agregarCiudad($link,$_POST);
            include('list.php');}
            //echo $salida;
          } elseif ($_POST['id']!='') {
            if ($_POST['ciudad']==""){
              errores();
            }else{
             $salida= editarCiudad($link,$_POST);
            include('list.php');}
          }
        }

      ?>


   </body>
 </html>
