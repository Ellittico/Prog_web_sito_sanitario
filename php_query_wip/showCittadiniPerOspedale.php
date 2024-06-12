<?php

// Recupero dei dati dall'input del form
$ospedale =  $_POST["ospedale"];
// Recupero dei dati dall'input del form

//connessione db
$servername = "localhost";
$username_db = "codexflashh";
$password_db = "XbYCUxrAtKs7";
$dbname = "my_codexflashh";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
//connessione db

//query
$sql = 
"SELECT C.nome, C.cognome, C.indirizzo, C.luogoNascita, C.dataNascita, C.CF
FROM CITTADINI AS C
JOIN RICOVERO AS R ON C.CF = R.CF
JOIN OSPEDALI AS O ON R.CODospedale = O.CODospedale
WHERE O.nome=$ospedale;";
//query

//console log
if ($conn->query($sql) === TRUE) {
    $message = "query SELECT * FROM CITTADINI --- eseguita";
    error_log($message, 3, "debug.log");
} else {
    $message = "query SELECT * FROM CITTADINI --- errore";
    error_log($message, 3, "debug.log");
}
//console log

//chiusura connessione
$conn->close();
//chiusura connessione
?>