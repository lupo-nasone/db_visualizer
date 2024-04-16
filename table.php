<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<table>
      <?php
      // Connessione al database (sostituisci con i tuoi dettagli di connessione)
      require_once "connection.php";


      $query = 'SHOW COLUMNS FROM ' . $_GET["table"];
      $result = $conn->query($query);
      $columns = [];

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<th>{$row['Field']}</th>";
            array_push($columns, $row['Field']);
        }
      }

      $query = 'SELECT * FROM ' . $_GET["table"];
      $result = $conn->query($query);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
                foreach ($columns as $t) {
                    echo '<td>' . $row[$t] . '</td>';
                }
            echo '</tr>';
        }
      }

      // Chiudi la connessione al database
      $conn->close();
      ?>

  </table>

  
    
</body>
</html>