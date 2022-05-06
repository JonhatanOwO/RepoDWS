<?php
if(!isset($_SESSION['personas'])){
    $_SESSION['personas']=[];
}
require ("app.php");
?>
<!DOCTYPEhtml>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario Re-Loco</title>
    </head>
    <body>
        <h1>Formulario Re-loco</h1>
        <div class="container">
            <form action="index.php" method="post">
                <input type="text" name="nombre" placeholder="Ingresa tu nombre mi loco"><br>
                <input type="text" name="apellido" placeholder="Ingresa tu apellido mi loco"><br>
                <p>Ingresa tu fecha de nacimiento mi loco</p>
                <input type="date" name="fecha"><br>
                <input type="hidden" name="array" value="<?php echo implode(",",  $_SESSION['personas']) ?>">
                <button type="submit" value="boton">Enviar</button>    
            </form>
            <?php
            tabla_uwu();
            ?>
    </div> 
        <?php
        echo "<a type='buton' href='index.php?p='1'>'Cerrar sesion'</a>";
        $_GET['p']=0; 
        if ($_GET["p"]==1){
            borrar();
        }
        ?>
    </body>
</html>