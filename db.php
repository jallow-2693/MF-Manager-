<?php
$host = "sql313.infinityfree.com";
$username = "if0_38637876";
$password = "Mf13466mod";
$dbname = "if0_38637876_MF_Manager";

// Créer la connexion
$conn = new mysqli($host, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
} else {
    echo "Connexion réussie à la base de données.";
}
?>
