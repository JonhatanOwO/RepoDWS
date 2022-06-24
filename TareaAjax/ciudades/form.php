<?php
if ($res){
$data=mysqli_fetch_array($res);
}
 ?>
<div class="container" style="background-color:#F8F9F9;">
<br>
<h3>Ciudad</h3>
<form class="" action="index.php" method="post">
  <input type="hidden" name="id" value="<?php if ($data['id']){ echo $data['id'];  } else { echo -1;} ?>">  <br>
  <label for="ciudad">Ciudad</label><br>
  <input type="text" name="ciudad" value="<?php if ($data['ciudad']){ echo $data['ciudad'];} ?>">
  <div class="btn-group" role="group" aria-label="Basic example">
  <button type="submit" class="btn btn-outline-success" >Enviar</button> <a class="btn btn-outline-success" href="index.php">volver</a>
</div>
</form>
<div>
        <pre>





        </pre>
      </div>
</div>