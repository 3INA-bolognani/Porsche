<?php

function login($email, $password) {
    global $pdo;

    $sql = "SELECT email, PasswordHASH FROM utenti WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        return false;
    }

    if (password_verify($password, $result["PasswordHASH"])) {
        return true;
    } else {
        return false;
    }
}

function registra($email, $password, $nome, $cognome) {
    global $pdo;

    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO utenti (email, PasswordHASH, nome, cognome) VALUES (?, ?, ?, ?)";
    
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email, $passwordHash, $nome, $cognome]);
    } catch (PDOException $e) {
        echo $e->getMessage() . "Errore!";
    }
}

function getInfoUser($email){
    global $pdo;
    $sql = "SELECT * FROM utenti WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}