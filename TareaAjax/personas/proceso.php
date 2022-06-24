<?php
function errores(){
    $errores=[];
    $con=0;
    echo "<div class='container' style=' background-color:#F8F9F9;'><br>";
    $fecha=explode('-', $_POST['fenac']);
    if (count($fecha) == 3) {
        if (checkdate($fecha[0], $fecha[1], $fecha[2])) {
            
        }else{
            array_push($errores, "<div class='alert alert-danger' role='alert'> La fecha no es valida</div><br>");
            $con=$con+1;
        }
    } else {
        array_push($errores, "<div class='alert alert-danger' role='alert'> La fecha no es valida</div><br>");
        $con=$con+1;
    }
    if ($_POST['id']!=""){
        $con=$con+1;
    }
    $nfecha=date_parse($_POST['fenac']);
    if ($nfecha['error_count']){
        array_push($errores, "<div class='alert alert-danger' role='alert'> La fecha no es valida</div><br>");
        $con=$con+1;
    }
    if ($_POST['fenac']==""){
        if (count($errores)<1)
        array_push($errores, "<div class='alert alert-danger' role='alert'> La fecha no es valida</div><br>");
        $con=$con+1;
    }
    if ($_POST['cin']==""){
        array_push($errores, "<div class='alert alert-danger' role='alert'> La cedula no puede estar vacia</div><br>");
        $con=$con+1;
        //echo "<div class='alert alert-danger' role='alert'> La cedula no puede estar vacia</div><br>";
    }
    if ($_POST['nombre']==""){
        $con=$con+1;
        array_push($errores, "<div class='alert alert-danger' role='alert'> El nombre no puede estar vacia</div><br>");
        //echo "<div class='alert alert-danger' role='alert'> El nombre no puede estar vacia</div><br>";
    }
    if ($_POST['apellido']==""){
        array_push($errores, "<div class='alert alert-danger' role='alert'> El apellido no puede estar vacia</div><br>");
        $con=$con+1;
        //echo "<div class='alert alert-danger' role='alert'> El apellido no puede estar vacia</div><br>";
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        array_push($errores, "<div class='alert alert-danger' role='alert'> El email no es valido</div><br>");
        $con=$con+1;
        //echo "<div class='alert alert-danger' role='alert'> El email no es valido</div><br>";
    }
    echo "</div>";

    if ($con>0){
        echo "<div class='container' style=' background-color:#F8F9F9;'><br>";
        for($i=0; $i<$con; $i++){
            echo $errores[$i];
        }
        echo "</div>";
        $link=conectar();
        $ciudades=mostrarCiudades($link);  
        $res=mostrarPorId($link,$_POST['id']);
        include('form.php');
    }
}
?>