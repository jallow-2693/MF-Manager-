<?php
$host = "sql313.infinityfree.com";
$dbname = "if0_38637876_MF_Manager";
$username = "if0_38637876";
$password = "Mf13466mod";

// Connexion à la base de données avec PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Définir le mode d'erreur pour afficher les erreurs SQL
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie!";
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
