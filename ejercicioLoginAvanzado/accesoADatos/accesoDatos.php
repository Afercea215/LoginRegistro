<?php
    function leeUsuarios()
    {
        $rutaFichero = '../accesoADatos/datos/alumnos.csv';

        $contenido = file_get_contents($rutaFichero);
        $lineas = explode(",",$contenido);

        foreach ($lineas as $key) {
            $usuarios [explode(";",$key)[0]] = [explode(";",$key)[1],explode(";",$key)[2]]; 
        }
        return $usuarios;
    }

    function validaUsuario($nombre,$clave)
    {
        $acceso=false;
        $usuarios = leeUsuarios();

        foreach ($usuarios as $key => $value) {
            if ($nombre==$key && $clave==$value[0]) {
                $acceso=true;
                break;
            }
        }
        return $acceso;
    }

    function añadeUsuario($nombre, $clave,$rol){
        $rutaFichero = '../accesoADatos/datos/alumnos.csv';

        $usuarios = leeUsuarios();
        $usuarios[$nombre] = [$clave,$rol];
        $stringUsuarios="";

        foreach ($usuarios as $key => $value) {
            echo $key." ".$value;
            $stringUsuarios .=$key.";".$value[0].";".$value[1].",";
        }

        $stringUsuarios = substr($stringUsuarios,0,strlen($stringUsuarios)-1);

        file_put_contents($rutaFichero,$stringUsuarios);
    }

    function rolUsuario($nombre)
    {
        $usuarios = leeUsuarios();
        return $usuarios[$nombre][1];
    }

    function borraUsuario($nombre)
    {
        $rutaFichero = '../accesoADatos/datos/alumnos.csv';
        $stringUsuarios="";
        $usuarios = leeUsuarios();
        
        foreach ($usuarios as $key => $value) {
            if ($key != $nombre) {
                $usuariosBorrado[$key]=$value;
            }
        }

        foreach ($usuariosBorrado as $key => $value) {
            $stringUsuarios .=$key.";".$value[0].";".$value[1].",";
        }
        $stringUsuarios = substr($stringUsuarios,0,strlen($stringUsuarios)-1);
        file_put_contents($rutaFichero,$stringUsuarios);
    }

?>