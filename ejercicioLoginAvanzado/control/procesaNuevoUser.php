<?php  
    //1º includes aqui :
    include_once "../accesoADatos/accesoDatos.php";
    include_once "../vista/imprimePagina.php";
    include_once "../helpers/validador.php";

    $user=$_POST['user'];
    $password=$_POST['password'];
    $rol=$_POST['rol'];

    if (validaInputText($user) && validaInputText($password) && validaInputText($rol)) {
        añadeUsuario($user,$password,$rol);
        header("Location: ../vista/listadoUsuarios.php");
    } else {
        header("Location: ../vista/formNuevoUser.php?error=Debe rellenar todo los datos");
    }
    //añadeUsuario("pepe","torres");
?>