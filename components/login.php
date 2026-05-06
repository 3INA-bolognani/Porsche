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

    if (empty($errori)) {
        if (login($email, $password)) {
            $_SESSION["user"] = $email;
        } else {
            $errori[] = "Email o Password Errati!";
        }
    }
}

?>

<div id="login-modal" class="overlay hidden">
    <div class="pop-up">

        <h1>Login</h1>

        <?php if (!empty($errori)) { ?>
            <?php foreach ($errori as $e) { ?>
                <h3 style="color:red"> <?php echo $e ?> </h3>
            <?php }; ?>
        <?php  }; ?>

        <form method="POST">

            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Inserire l'Email..." required>

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Inserire la Password" required>

            <button class="btn-homepage" type="submit">Accedi</button>
            <button class="btn-pop" onclick="window.location.href='registrazione.php';">Registrati</button>
        </form>

        <p class="close-hint">Clicca fuori per chiudere</p>

    </div>
</div>