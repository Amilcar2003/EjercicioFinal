<?php
  class Conexion extends mysqli
  {
    public function construct()
    {
      $servidor="localhost";
      $basedatos="base";
      $usuario="ruta";
      $contraseņa="password";

      parent::construct($servidor,$usuario,$contraseņa,$basedatos);
      $this->query("SET NAMES 'utf8';");
      $this->connect_errno ? die("Error") : $error="Conectado a " .$basedatos;
      unset($error);
    }
  }
?>