<?php
   include ('Conexion.php');

   class validaruser
   {
      public function validarus ($user, $pass)
      {
        $us = new Conexion();
        $q= "SELECT * FROM usuarios WHERE usuario='$user' AND contraseņa='$pass';";
        $usuario=$us->query($q);
        $us->close();
        return $usuario;
      }
   }
?>