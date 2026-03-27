<?php
require_once "components/session.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porsche - Homepage</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>

    <?php require_once "components/navbar.php" ?>

    <main>
        <div class="left-homePage">
            <h6 class="porsche-configurator">P O R S C H E | C O N F I G U R A T O R</h6>
            <h1 class="progetta">Progetta la tua</h1>
            <h1 class="porsche">Porsche.</h1>
            <h5 class="scritte-index">Scegli il modello, personalizza ogni dettaglio —
                dalla carrozzeria agli interni — e visualizza la
                tua creazione in tempo reale.
            </h5>
            <button class="btn-homepage" onclick="window.location.href='modello.php';">SCEGLI IL MODELLO</button>
            <button class="btn-homepage" onclick="window.location.href='storia.php';">STORIA PORSCHE</button>
        </div>
        <div class="pop-up hidden">
        </div>
    </main>
</body>
</html>