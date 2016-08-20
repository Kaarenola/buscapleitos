<?php 
  $destino= "kaarenolaml@gmail.com";
  $nombre= $_POST["nombre"];
    $apellido= $_POST["apellido"];
      $email= $_POST["email"];
         $mensaje= $_POST["mensaje"];
         $contenido= "Nombre: " . $nombre . "\nApellido: "  . "\nEmail: " . "\nMensaje: " . $mensaje; 
         mail($destino, "contacto", "$contenido");
         header("Location: gracias.html");





 ?>