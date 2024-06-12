<?php 

if (empty($_SESSION['file'])) {
    $_SESSION['file'] = htmlspecialchars($_SERVER['PHP_SELF']);
}

if($_SESSION['file'] != htmlspecialchars($_SERVER['PHP_SELF']))
{
    unset($_SESSION['nome']);
    unset($_SESSION['cognome']);
    unset($_SESSION['citta']);
    unset($_SESSION['data_inizio']);
    unset($_SESSION['data_fine']);
    unset($_SESSION['codice']);
    unset($_SESSION['order']);
    unset($_SESSION['opt']);
    unset($_SESSION['gravita']);
    unset($_SESSION['costo_inizio']);
    unset($_SESSION['costo_fine']);
    unset($_SESSION['gg_inizio']);
    unset($_SESSION['gg_fine']);


    $_SESSION['file'] = htmlspecialchars($_SERVER['PHP_SELF']);
}

switch ($_SESSION['file']) {
    case "/prog-sito-sanitario-final/pages/cittadini.php":

        if (isset($_POST['nome'])) {
            $_SESSION['nome'] = $_POST['nome'];
        }
    
        if (isset($_POST['cognome'])) {
            $_SESSION['cognome'] = $_POST['cognome'];
        }
    
        if (isset($_POST['citta'])) {
            $_SESSION['citta'] = $_POST['citta'];
        }
  
        if (isset($_POST['data_inizio']) && isset($_POST['data_fine'])) {
            $_SESSION['data_inizio'] = $_POST['data_inizio'];
            $_SESSION['data_fine'] = $_POST['data_fine'];
        }
    
        if (isset($_POST['order'])) {
            $_SESSION['order'] = $_POST['order'];
        }

        break;
    case "/prog-sito-sanitario-final/pages/ospedale.php": 
        if (isset($_POST['codice'])) {
            $_SESSION['codice'] = $_POST['codice'];
        }
        
        if (isset($_POST['nome'])) {
            $_SESSION['nome'] = $_POST['nome'];
        }
    
        if (isset($_POST['citta'])) {
            $_SESSION['citta'] = $_POST['citta'];
        }

        if (isset($_POST['order'])) {
            $_SESSION['order'] = $_POST['order'];
        }
        break;
    case "/prog-sito-sanitario-final/pages/patologia.php": 
        if (isset($_POST['nome'])) {
            $_SESSION['nome'] = $_POST['nome'];
        }
    
        if (isset($_POST['gravita'])) {
            $_SESSION['gravita'] = $_POST['gravita'];
        }

        if (isset($_POST['opt'])) {
            $_SESSION['opt'] = $_POST['opt'];
        }

        if (isset($_POST['order'])) {
            $_SESSION['order'] = $_POST['order'];
        }
            break;
    case "/prog-sito-sanitario-final/pages/ricovero.php":
    
        if (isset($_POST['data_inizio']) && isset($_POST['data_fine'])) {
            $_SESSION['data_inizio'] = $_POST['data_inizio'];
            $_SESSION['data_fine'] = $_POST['data_fine'];
        }

        if (isset($_POST['gg_inizio']) && isset($_POST['gg_fine'])) {
            $_SESSION['gg_inizio'] = $_POST['gg_inizio'];
            $_SESSION['gg_fine'] = $_POST['gg_fine'];
        }

        if (isset($_POST['costo_inizio']) && isset($_POST['costo_fine'])) {
            $_SESSION['costo_inizio'] = $_POST['costo_inizio'];
            $_SESSION['costo_fine'] = $_POST['costo_fine'];
        }
    
        if (isset($_POST['order'])) {
            $_SESSION['order'] = $_POST['order'];
        }
        break;  
        default: break;
}
?>