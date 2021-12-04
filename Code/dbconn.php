<?php
$host         = "localhost";
$username     = "root";
$password     = "";
$dbname       = "comptebnq";
try {
    $dbconn = new PDO('mysql:host=localhost; dbname=comptebnq', $username, $password);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
