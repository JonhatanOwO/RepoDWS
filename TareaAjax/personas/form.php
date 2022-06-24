<?php
if ($res){
$data=mysqli_fetch_array($res);
}
 ?>
 
<div class="container" style="background-color:#F8F9F9;">
<br>
<h3>Personas</h3>
<form class="" action="index.php" method="post">
  <input type="hidden" name="id" value="<?php if ($data['id']){ echo $data['id'];  } else { echo -1;} ?>">  <br>
  <div class="xl-3">
  <label for="cin" class="form-label">CIN</label><br>
  <input type="text" name="cin"  value="<?php if ($data['cin']){ echo $data['cin'];} ?>"><br>
</div>
  <label for="apellido">Apellido</label><br>
  <input type="text" name="apellido" value="<?php if ($data['apellido']){ echo $data['apellido'];} ?>"><br>

  <label for="nombre">Nombre</label><br>
  <input type="text" name="nombre" value="<?php if ($data['nombre']){ echo $data['nombre'];} ?>"><br>

  <label for="fenac">F. Nacimiento</label><br>
  <input type="text" name="fenac" value="<?php if ($data['fenac']){ echo $data['fenac'];} ?>"><br>

  <label for="email">Email</label><br>
  <input type="text" name="email" value="<?php if ($data['email']){ echo $data['email'];} ?>"><br>

  <label for="ciudad_id">Ciudad</label><br>
  <select class="" name="ciudad_id">
    <?php
    while ($d=mysqli_fetch_array($ciudades))
    {
      $sel='';
      if ($data['ciudad_id'] & ($d['id']==$data['ciudad_id']) )
        { $sel="selected='true'";}
      echo "<option  value='".$d['id']."'".$sel.">".$d['ciudad']."</option>";
    }
     ?>
  </select>
  <button type="submit" class="btn btn-success" >Enviar</button>    <a class="btn btn-outline-success" href="index.php">volver</a>
</form>
<br>
  </div>
