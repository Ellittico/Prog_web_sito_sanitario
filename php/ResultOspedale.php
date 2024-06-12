<?php
include '../php/functions.php';

$conn = connectDb();

$nome = $_SESSION['nome'] ?? '';
$codice = $_SESSION['codice'] ?? '';
$citta = $_SESSION['citta'] ?? '';
$order = $_SESSION['order'] ?? '';


$sql = buildShowOspedaliSqlQuery($nome, $codice, $citta, $order);

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    foreach($result as $riga) {
        displayOspedaleRecord($riga);
    }
} else {
    displayNoResults();
}

$conn->close();
?>
<script src="../js/gestioneCRUD.js"> </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"> </script>
