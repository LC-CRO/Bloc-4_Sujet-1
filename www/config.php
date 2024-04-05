<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$host = 'localhost:3306';
$dbname = 'library';
$username = 'libr';
$password = 'NIEN97BF21OZEFJOZEO';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
