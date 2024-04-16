<?php
session_start();

global $_SESSION;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se sono stati inviati tutti i parametri
    if (isset($_POST['servername']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['database'])) {
        // Recupera i valori dal modulo e assegnali alle variabili di sessione
        $_SESSION['servername'] = $_POST['servername'];
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['database'] = $_POST['database'];

        // Redirect alla pagina desiderata dopo aver impostato le variabili di sessione
        $_SESSION['logged_in'] = true;
        header("Location: index.php");
        exit();
    } else {
        echo "Errore: Non tutti i parametri sono stati inviati.";
    }
}
?>
