<?php
  include('validarusuario.php');

  $val =new validaruser;

  $NOMBRE=$_POST['NOMBRE'];
  $CONTRASEŅA=$_POST['CONTRASEŅA'];

  $resultado=$val-> validarus($NOMBRE, $CONTRASEŅA);

  var_dump($resultado);



  if($resultado->num_rows == 1)
  {
    header("location:index.html");
  }

  else 
  {
   header("location:opciones.php");
  } 
?>