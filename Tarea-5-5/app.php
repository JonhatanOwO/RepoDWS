<?php
    session_start();
    $_SESSION['personas']=[];
    $proceso=[];
    if (!$_POST){
        $_POST['nombre']= '';
        $_POST['apellido']= '';
        $_POST['fecha']= '';
    }
    //$proceso=array("nombre"=>$_POST['nombre'], "apellido"=>$_POST['apellido'], "fecha"=>$_POST['fecha']);
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $fecha=$_POST['fecha'];
   if (!empty($_POST['array'])){
       $datos= explode(",",$_POST['array']);
   }else{
       $datos=array();
   }
    array_push($datos, $nombre);
    array_push($datos, $apellido);
    array_push($datos, $fecha);
    $_SESSION['personas']= $datos;  
    //print_r( $datos);
    function tabla_uwu(){
        echo "<table> <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Nacimiento reloco</th>
        </tr>";
        
            for ($i=0; $i<count($_SESSION['personas']);$i=$i+3){
                echo "<tr>";
                echo "<th>".$_SESSION['personas'][$i]."</th>";
                echo "<th>".$_SESSION['personas'][$i+1]."</th>";
                echo "<th>".$_SESSION['personas'][$i+2]."</th>";
                echo "</tr>";
            } 
        echo "</table>";
    }
    function borrar(){
        session_destroy();
    }
    
?>