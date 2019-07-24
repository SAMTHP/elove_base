<?php

$hote = "localhost";
$dbname = "elo_test";
$dbuser = "root";
$pass = "";

// Connexion au serveur mySQL
try{
    $dsn = "mysql:host=$hote;dbname=$dbname";
    $connect = new PDO($dsn,$dbuser,$pass);
} catch (Exception $msg){
    echo "Echec de connexion au seveur MySQL avec pour cause " .$msg->getMessage();
    die();
}