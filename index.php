<?php
// Avvio della sessione
session_start();

// Controllo se l'utente ha eseguito il login
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Reindirizzamento alla pagina di login
    header("Location: login.html");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


    <form action="table.php">
        <select name="table" id="">
            <?php
                require_once "connection.php";
                $sql = "SHOW TABLES";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while ($row = $result->fetch_assoc()){
                        echo '<option value="' . $row['Tables_in_' . $_SESSION["database"]] . '">' . $row['Tables_in_' . $_SESSION["database"]] . '</option>';
                    }
                }
            ?>
        </select>
        <input type="submit">
    </form>
</body>
</html>
