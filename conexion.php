<?php
  class Conexion extends mysqli
  {
    public function construct()
    {
      $servidor="localhost";
      $basedatos="base";
      $usuario="ruta";
      $contrase�a="password";

      parent::construct($servidor,$usuario,$contrase�a,$basedatos);
      $this->query("SET NAMES 'utf8';");
      $this->connect_errno ? die("Error") : $error="Conectado a " .$basedatos;
      unset($error);
    }
  }
?>