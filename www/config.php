<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$host = 'localhost:3310';
$dbname = 'library';
$username = 'root';//'libr';
$password = 'mezfezfef455e1fe1f5ez'; //'NIEN97BF21OZEFJOZEO';
// ALTER TABLE emprunt ADD COLUMN date_retour_prevue DATE;
/*apt update & install nano
nano lib.sql
mysql -u root -p -e "CREATE DATABASE library";
mysql -u root -p library < lib.sql
rm lib.sql*/

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
