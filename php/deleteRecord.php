<?php
include '../php/functions.php';

$conn = connectDb();

$CODricovero = $_POST['CODricovero'] ?? null; 

if (!$CODricovero) {
    die("ID del ricovero non specificato.");
}

$stmt = $conn->prepare("DELETE FROM RICOVERO WHERE CODricovero = ?");
$stmt->bind_param("s", $CODricovero);

if ($stmt->execute()) {
    echo "Record deleted successfully";
} else {
    echo "Errore durante l'eliminazione del record: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
