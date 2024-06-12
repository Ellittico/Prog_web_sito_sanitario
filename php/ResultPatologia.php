<?php
include '../php/functions.php';

$conn = connectDb();

$NOMEpatologia = $_SESSION['nome'] ?? '';
$CODpatologia = $_SESSION['codice'] ?? '';
$gravita = $_SESSION['gravita'] ?? '';
$OPT = $_SESSION['opt'] ?? '';
$order = $_SESSION['order'] ?? '';


$sql = buildShowPatologieSqlQuery($NOMEpatologia, $CODpatologia, $gravita, $OPT, $order);

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    foreach($result as $riga) {
        if($riga["CRONICA"] == 1) $riga["CRONICA"] = "true";
        if($riga["CRONICA"] == 0) $riga["CRONICA"] = "false";
        if($riga["MORTALE"] == 1) $riga["MORTALE"] = "true";
        if($riga["MORTALE"] == 0) $riga["MORTALE"] = "false";
        displayPatologiaRecord($riga);
    }
} else {
    displayNoResults();
}

$conn->close();
?>
<script src="../js/gestioneCRUD.js"> </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"> </script>
