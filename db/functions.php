<?php

function login($email, $password) {
    global $pdo;

    $sql = "SELECT email,PasswordHASH FROM utenti WHERE email = ?";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result["email"] === $email && password_verify($password, $result["password"])) {
        return true;
    }else{
        return false;
    }

}

function registra(){
    global $pdo;
} 

function getInfoUser($email){
    global $pdo;
    $sql = "SELECT * FROM utenti WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}