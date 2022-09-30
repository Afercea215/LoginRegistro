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
        <?php
            if (!empty($_GET["error"])){
                echo $_GET["error"];
        ?>
        <input type="password" name="password" id="">
        <button type="submit">Registrar</button>
        <label for="">Mindundi</label>
        <input type="radio" name="rol" value="mindundi">
        <label for="">Admin</label>
        <input type="radio" name="rol" value="admin">
    </form>
</body>
</html>

