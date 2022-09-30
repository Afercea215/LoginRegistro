<?php  
    //1º includes aqui :
    include_once "../accesoADatos/accesoDatos.php";
    include_once "../vista/imprimePagina.php";
    include_once "../helpers/validador.php";

    $user=$_POST['user'];
    $password=$_POST['password'];
    $rol=$_POST['rol'];

    borraUsuario($user);
    añadeUsuario($user,$password,$rol);
    
    header("Location: ../vista/listadoUsuarios.php");


    //añadeUsuario("pepe","torres");
?>