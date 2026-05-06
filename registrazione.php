<?php
require_once "db/connection.php";
require_once "db/functions.php";

$errori = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"])) {
        $email = $_POST["email"];
    } else {
        $errori[] = "Email Mancante!";
    }

    if (isset($_POST["password"])) {
        $password = $_POST["password"];
    } else {
        $errori[] = "Password Mancante!";
    }

    if (isset($_POST["nome"])) {
        $nome = $_POST["nome"];
    } else {
        $errori[] = "Nome Mancante!";
    }

    if (isset($_POST["cognome"])) {
        $cognome = $_POST["cognome"];
    } else {
        $errori[] = "Cognome Mancante!";
    }

    if (empty($errori)) {
        if (registra($email,$password,$nome,$cognome)) {
            $_SESSION["user"] = $email;
            header("location: index.php");
        }
    }
}

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
    <?php require_once "components/login.php" ?>

    <?php if (!empty($errori)) { ?>
        <?php foreach ($errori as $e) { ?>
            <h3 style="color:red"> <?php echo $e ?> </h3>
        <?php }; ?>
    <?php  }; ?>

    <form class="form-reg" method="POST">

        <label for="email">Email:</label>
        <input type="text" name="email" placeholder="Inserire l'Email..." required>

        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Inserire la Password..." required>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" placeholder="Inserire Il Nome..." required>

        <label for="cognome">Cognome:</label>
        <input type="text" name="cognome" placeholder="Inserire Il Cognome..." required>

        <button class="btn-homepage-reg" type="submit">Registrati</button>
    </form>

</body>

</html>