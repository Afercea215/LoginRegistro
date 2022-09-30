<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="../control/procesaNuevoUser.php" method="post">
        <input type="text" name="user" id="">
        <input type="password" name="password" id="">
        <button type="submit">Registrar</button>
        <label for="">Mindundi</label>
        <input type="radio" name="rol" value="mindundi">
        <label for="">Admin</label>
        <input type="radio" name="rol" v
        
        alue="admin">
    </form>
    <?php
        if (!empty($_GET["error"])){
            echo "<p style='color:red'>".$_GET["error"]."</p>";
        }
    ?>
</body>
</html>

