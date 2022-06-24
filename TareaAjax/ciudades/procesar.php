<?php 

function errores(){
    $errores=[];
    $con=0;
    if ($_POST['id']!=""){
        $con=$con+1;
    }
    if ($_POST['ciudad']==""){
        $con=$con+1;
        array_push($errores, "<div class='alert alert-danger' role='alert'> La ciudad no puede estar vacia</div><br>");
        //echo "<div class='container'  style=' background-color:#F8F9F9;'><br>";
        //echo "</div>";
    }
    if($con>0){
        $res=mostrarCiudad($link,$_POST['id']);
        include('form.php');
    }
    
}

?>