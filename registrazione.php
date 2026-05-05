<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porsche - Registrazione</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>

    <?php require_once "components/navbar.php"; ?>

    <form method="POST">

    <label for="email">Email:</label>
    <input type="text" name="email" placeholder="Inserire l'Email...">

    <label for="password">Password:</label>
    <input type="password" name="password" placeholder="Inserire la Password...">

    </form>

</body>
</html>
