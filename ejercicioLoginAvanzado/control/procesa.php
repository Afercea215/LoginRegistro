<?php  
    //1º includes aqui :
    include_once "../accesoADatos/accesoDatos.php";
    include_once "../vista/imprimePagina.php";
    include_once "../helpers/validador.php";

    $user=$_POST['user'];
    $password=$_POST['password'];

    if (validaInputText($user) && validaInputText($password)) {
        if (validaUsuario($user,$password)) {
            echo rolUsuario($user);
            if (rolUsuario($user)=="admin") {
                header("Location: ../vista/listadoUsuarios.php");
            } else {
                imprimeAcceso();
            }
        } else {
            header("Location: ../vista/login.html");
        }
    }
    //añadeUsuario("pepe","torres");
?>