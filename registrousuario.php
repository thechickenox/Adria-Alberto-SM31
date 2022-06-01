<?php

include('conec.php');
if(isset($_POST['enviar'])){

    $Snombre = $_POST ['codnombre'];
    $Sapellido_paterno = $_POST ['codapellido_paterno'];
    $Sapellido_materno = $_POST ['codapellido_materno'];
    $Stelefono = $_POST ['codtelefono'];
    $Scorreo = $_POST ['codcorreo'];
    $Susuario = $_POST ['codusuario'];
    $Scontrasena = $_POST ['codcontrasena'];


    $insertarusuario = "INSERT INTO usuario (nombre,apellido_paterno,apeliido_materno,telefono,correo,usuario,contrasena)
    VALUE ('$Snombre','$Sapellido_paterno','$Sapellido_materno','$Stelefono','$Scorreo','$Susuario','$Scontrasena')";
    $resultado = mysqli_query ($conexion,$insertarusuario);

    if(!$resultado){
        echo '<script>alert("Los datos se insertaron")</script>';
    }
    else{
        echo '<script>alert("Los datos si se insertaron")</script>';
    }
}
header('Location: usuario.php');
?>
