<?php
$conexion = mysqli_connect('localhost','root','','ajax_prueba');
  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellidos'];
  $usuario=$_POST['usuario'];
  $password=$_POST['password'];
$sql = "INSERT INTO usuarios (nombre,apellidos,usuario,contra)
        VALUES('$nombre','$apellido','$usuario','$password')";
    echo mysqli_query($conexion,$sql);
 ?>
