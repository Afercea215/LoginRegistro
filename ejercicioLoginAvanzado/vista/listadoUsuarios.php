<?php
include_once "../accesoADatos/accesoDatos.php";

if (!empty($_GET['usuario'])) {
    borraUsuario($_GET['usuario']);
}

//var_dump(leeUsuarios());

echo "<a href='../vista/login.html'>Log out</a>
    <br>
    <a href='../vista/formNuevoUser.php'>Crear Usuario</a>";

$usuarios = leeUsuarios();

echo "<table border='solid 2px black'>
        <tr>
            <th>Nombre</th>
            <th>Clave</th>
            <th>Rol</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>";

foreach ($usuarios as $key => $value) {
    echo "<tr>
            <th>".$key."</th>
            <th>".$value[0]."</th>
            <th>".$value[1]."</th>
            <th><a href='./imprimeCambioUsuario.php?usuario=".$key."&&pass=".$value[0]."&&rol=".$value[1]."'>
            <img src='../imgs/lapiz.png' height='25px' width='25px'></a></th>
            <th><a href='./listadoUsuarios.php?usuario=".$key."'>
            <img src='../imgs/papelera.png' height='25px' width='25px'></a></th>
        </tr>";
}

echo "</table>";
?>