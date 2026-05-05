<?php


?>

<div id="login-modal" class="overlay hidden">
    <div class="pop-up">

        <h1>Login</h1>

        <form action="POST">

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