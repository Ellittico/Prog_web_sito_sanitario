<?php
include '../php/functions.php';

$conn = connectDb();

$CODricovero = $_POST['newCODricovero'] ?? null;
$CODospedale = $_POST['newCODospedale'] ?? null;
$COSTOricovero = $_POST['newcosto'] ?? null;
$DATAricovero = $_POST['newdata'] ?? null;
$DURATAricovero = $_POST['newdurataRicovero'] ?? null;
$MOTIVOricovero = $_POST['newmotivo'] ?? null;
$PAZIENTEricovero = $_POST['newCSSN'] ?? null;

$sql = $conn->prepare("INSERT INTO RICOVERO (CODospedale, CODricovero, PAZIENTEricovero, DATAricovero, DURATAricovero, MOTIVOricovero, COSTOricovero) VALUES (?, ?, ?, ?, ?, ?, ?)");
$sql->bind_param("iissisi", $CODospedale, $CODricovero, $PAZIENTEricovero, $DATAricovero, $DURATAricovero, $MOTIVOricovero, $COSTOricovero);


if ($sql->execute()) {
	$sql->close();
	$conn->close();
} else {
    echo "Errore: " . $sql->error;
    $sql->close();
$conn->close();
}

header("Location: ../pages/ricovero.php");
exit();
