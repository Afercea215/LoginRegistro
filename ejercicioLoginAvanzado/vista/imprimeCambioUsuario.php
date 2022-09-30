<?php
    $user=$_GET['usuario'];
    $password=$_GET['pass'];
    $rol=$_GET['rol'];
?>
    <form action='../control/procesaCambioUser.php' method='post'>
        <input type='text' name='user' id='' value='<?php echo $user ?>'>
        <input type='password' name='password' id='' value='<?php echo $password ?>'>
        <label for=''>Mindundi</label>
        <input type='radio' name='rol' value='mindundi'
            <?php
                if ($rol=="mindundi") {
                    echo "checked='checked'";
                }
            ?>
        >
        <label for=''>Admin</label>
        <input type='radio' name='rol' value='admin'
            <?php
                if ($rol=="admin") {
                    echo "checked='checked'";
                }
            ?>
        >
        <br>
        <br>
        <button type='submit'>Guardar</button>
    </form>
