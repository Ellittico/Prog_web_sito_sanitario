<?php
if (!isset($_SESSION['theme'])) {
    $_SESSION['theme'] = 'olive';
}
if (isset($_POST['theme'])) {
    $_SESSION['theme'] = $_POST['theme'];
}
if ($_SESSION['theme'] === 'blue') {
    include "../html/headBlue.html";
} elseif ($_SESSION['theme'] === 'olive') {
    include "../html/head.html";
} else {
    include "../html/head.html"; 
}
?>