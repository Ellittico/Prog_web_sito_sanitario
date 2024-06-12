<?php
include '../php/functions.php';

$conn = connectDb();

$data_inizio = $_SESSION['data_inizio'] ?? '';
$data_fine = $_SESSION['data_fine'] ?? '';
$gg_inizio = $_SESSION['gg_inizio'] ?? '';
$gg_fine = $_SESSION['gg_fine'] ?? '';
$costo_inizio = $_SESSION['costo_inizio'] ?? '';
$costo_fine = $_SESSION['costo_fine'] ?? '';
$order = $_SESSION['order'] ?? '';


$sql = buildShowRicoveroSqlQuery($data_inizio, $data_fine, $gg_inizio, $gg_fine, $costo_inizio, $costo_fine, $order);

$result = $conn->query($sql);
$i = 0;
if ($result->num_rows > 0) {
    foreach($result as $riga) {
        $riga["COSTOricovero"] .= "€";
        $i++;
        displayRicoveroRecord($riga, $i);
    }
} else {
    displayNoResults();
}

$conn->close();
?>

$conn->close();
?>
<script src="../js/gestioneCRUD.js"> </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"> </script>
