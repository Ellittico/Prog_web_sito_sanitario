<?php
include '../php/functions.php';

$conn = connectDb();

error_log("POST data: " . print_r($_POST, true));

$id_ricovero = $_POST['id_ricovero'] ?? null;

if (!$id_ricovero) {
    die("ID del ricovero non specificato.");
}

$sql = "UPDATE RICOVERO SET";

if (!empty($_POST['newCODricovero'])) {
    $newCODricovero = $_POST['newCODricovero'];
    $sql .= " CODricovero = '$newCODricovero',";
}

if (!empty($_POST['newCODospedale'])) {
    $newCODospedale = $_POST['newCODospedale'];
    $sql .= " CODospedale = '$newCODospedale',";
}

if (!empty($_POST['newcosto'])) {
    $newcosto = $_POST['newcosto'];
    $sql .= " COSTOricovero = '$newcosto',";
}

if (!empty($_POST['newdata'])) {
    $newdata = $_POST['newdata'];
    $sql .= " DATAricovero = '$newdata',";
}

if (!empty($_POST['newdurataRicovero'])) {
    $newdurataRicovero = $_POST['newdurataRicovero'];
    $sql .= " DURATAricovero = '$newdurataRicovero',";
}

if (!empty($_POST['newmotivo'])) {
    $newmotivo = $_POST['newmotivo'];
    $sql .= " MOTIVOricovero = '$newmotivo',";
}

if (!empty($_POST['newCSSN'])) {
    $newCSSN = $_POST['newCSSN'];
    $sql .= " PAZIENTEricovero = '$newCSSN',";
}

$sql = rtrim($sql, ',');

$sql .= " WHERE CODricovero = '$id_ricovero'";

if ($conn->query($sql) === TRUE) {
	$conn->close();
} else {
    echo "Errore durante l'aggiornamento del record: " . $conn->error;
    $conn->close();
}
header("Location: ../pages/ricovero.php");
exit();
?>
