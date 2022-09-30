<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
/*         echo $_GET['rol'];
        echo $_GET['user'];
        echo $_GET['pass']; */
    ?>

    <form action="../control/procesaNuevoUser.php" method="post">
        <input type="text" name="user" id="" value='<?php
                if (!empty($_GET['user'])) {
                        echo $_GET['user'];   
                }
            ?>'>
        <input type="password" name="password" id="" value='<?php
                if (!empty($_GET['pass'])) {
                        echo $_GET['pass'];   
                }
            ?>'>
        <button type="submit">Registrar</button>
        <label for="">Mindundi</label>
        <input type="radio" name="rol" value="mindundi" <?php
                if (!empty($_GET['rol'])) {
                    if ($_GET['rol']=="mindundi") {
                        echo "checked='checked'";
                    }    
                }
            ?>
        >
        <label for="">Admin</label>
        <input type="radio" name="rol" value="admin"
            <?php
                if (!empty($_GET['rol'])) {
                    if ($_GET['rol']=="admin") {
                        echo "checked='checked'";
                    }    
                }
            ?>
        >
    </form>
    <?php
        if (!empty($_GET["error"])){
            echo "<p style='color:red'>".$_GET["error"]."</p>";
        }
    ?>
</body>
</html>

