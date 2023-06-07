<?php

include("conexion.php");

if (isset($_POST["register"]))
if(
    strlen($_POST["name"])  >= 1 &&
    strlen($_POST["email"]) >= 1 &&
    strlen($_POST["direction"]) >= 1 &&
    strlen($_POST["phone"]) >= 1 &&
    strlen($_POST["password"])  >= 1 &&
                        
)  {

    $name = trim($_POST["name"]);
    $name = trim($_POST["email"]);
    $name = trim($_POST["direction"]);
    $name = trim($_POST["phone"]);
    $name = trim($_POST["password"]);
    $name = trim($_POST["d/m/y"]);
    $consulta ="INSERT INTO datos(nombre,email,direccion,telefono,fecha)
    VALUES("$name", "$name", "$direction", "$phone", "$password", "$fecha")";
    $resultado =mysqli_connect($conex, $consulta);
    if ($resultado)  {
     ?>
     <h3 class="success"> Tu registro se a completado</h3>
     <?php
        
       } else {
        ?>
        <h3 class="error">Ocurrio un error</h3>
        <?php
              } else {
                ?>
                <h3 class="error">Llena todos los campos</h3>
                 <?php
       
    }
}


?>
        