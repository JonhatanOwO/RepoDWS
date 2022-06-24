<?php
$res=mostrarTodos($link);
 ?>
 <div class="container-xl" style="background-color:#F8F9F9;">
 <br>
 <h3>Personas</h3>
 <a class="btn btn-success" href="index.php?mod=new">Nuevo</a><a href="<?php echo "json.php?id=".$data["id"]; ?>" target="new" class="btn btn-outline-success">JSON</a><br>
 <div class="row">
     <?php
     while ($data=mysqli_fetch_array($res))
     {
       echo "<div class='card col-4' style='width: 18rem;'> <div class='card-body'>";
      echo"<h5 class='card-title'>".$data['nombre']." ".$data['apellido']."</h5>";
      echo"<p 'card-text'>Cedula: ".$data['cin']." </p>";
      echo"<p 'card-text'>Fecha de Nacimiento: ".$data['fenac']." </p>";
      echo"<p 'card-text'>E-mail: ".$data['email']." </p>";
      echo"<p 'card-text'>Ciudad: ".nombreCiudad($link,$data['ciudad_id'])." </p>";
      echo"<div class='btn-group' role='group' aria-label='Basic example'>";
      echo "<a class='btn btn-outline-success' href='index.php?mod=edit&id=".$data["id"]."'>editar</a></td><td><a class='btn btn-outline-success' href='index.php?mod=delete&id=".$data["id"]."'>borrar</a><a href=json.php?id='".$data["id"]."' target='new' class='btn btn-outline-success'>JSON</a>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      //echo"<p>Apellido:".$data['apellido']." </p>"
      // "</td><td>".$data['apellido']."</td><td>".$data['nombre']."</td><td>".$data['fenac']."</td><td>".$data['email']."</td><td>".nombreCiudad($link,$data['ciudad_id'])."</td><td><a class='btn btn-primary' href='index.php?mod=edit&id=".$data["id"]."'>editar</a></td><td><a class='btn btn-secondary' href='index.php?mod=delete&id=".$data["id"]."'>borrar</a></td></tr>";
     
    }
      ?>
      </div>
      <div>
        <pre>





        </pre>
      </div>
    </div>
    <br>
