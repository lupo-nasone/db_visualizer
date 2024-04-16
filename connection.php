<?php
// Dati di connessione al database
// $servername = $_SESSION["servername"]; // Modifica localhost con l'indirizzo del server del database se è diverso
// $username = $_SESSION["username"]; // Modifica tuo_utente con il nome utente del database
// $password = $_SESSION["password"]; // Modifica tua_password con la password del database
// $database = $_SESSION["database"]; // Modifica tuo_database con il nome del database

// Tentativo di stabilire la connessione
//$conn = new mysqli ($servername, $username, $password, $database);
$conn = new mysqli ("mariadb", "root", "", "temp");

// Verifica della connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

echo "Connessione riuscita!";

?>
