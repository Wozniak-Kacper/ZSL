<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>
    <?php if (empty($_SESSION['user'])) : ?>
    <form action="script.php" method="post">
        <input type="text" name="name" placeholder="Podaj login">
        <input type="password" name="password" placeholder="Podaj hasło">
        <input type="submit" value="Zaloguj się">
    </form>

    <?php else : ?>
        <p>hi, <?=$_SESSION['user']?></p>
        <a href="log.php">logout</a>
    <?php endif; ?>
</body>
</html>