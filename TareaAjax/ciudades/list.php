<?php
$res=mostrarCiudades($link);
 ?>
 <div class="container" style="background-color:#F8F9F9;">
 <br>
 <h3>Ciudades</h3>
 <a class="btn btn-success" href="index.php?mod=new">Nuevo</a><a href="<?php echo "json.php?id=".$data["id"]; ?>" target="new" class="btn btn-outline-success">JSON</a><br>
    <div class="row">
     <?php
     while ($data=mysqli_fetch_array($res))
     {
      echo "<div class='card col-4' style='width: 18rem;'> <div class='card-body'>";
      echo"<h5 class='card-title'>Ciudad: ".$data[0]."</h5>";
      echo"<p 'card-text'>".$data['ciudad']." </p>";
      echo"<div class='btn-group' role='group' aria-label='Basic example'>";
      echo "<a class='btn btn-outline-success' href='index.php?mod=edit&id=".$data["id"]."'>editar</a></td><td><a class='btn btn-outline-success' href='index.php?mod=delete&id=".$data["id"]."'>borrar</a><a href=json.php?id='".$data["id"]."' target='new' class='btn btn-outline-success'>JSON</a>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
     }
      ?>
    </div>
    <div>
        <pre>





        </pre>
      </div>
 </div>