<?php
include '../php/functions.php';

$conn = connectDb();

$nome = $_SESSION['nome'] ?? '';
$cognome = $_SESSION['cognome'] ?? '';
$citta = $_SESSION['citta'] ?? '';
$data_inizio = $_SESSION['data_inizio'] ?? '';
$data_fine = $_SESSION['data_fine'] ?? '';
$order = $_SESSION['order'] ?? '';

$sql = buildShowCittadiniSqlQuery($nome, $cognome, $citta, $data_inizio, $data_fine, $order);

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    foreach($result as $riga) {
        displayCittadinoRecord($riga);
    }
} else {
    displayNoResults();
}

$conn->close();
?>
<script src="../js/gestioneCRUD.js"> </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"> </script>
