<?php

$host = 'localhost';
$db   = 'porsche';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$conn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Lancia eccezioni in caso di errore
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Restituisce array associativi di default              // Usa le prepared statements reali
];

try {
     $pdo = new PDO($conn, $user, $pass, $options);
     echo "Connessione riuscita con successo!";
} catch (PDOException $e) {
     echo $e->getMessage();
}

