<?php
if (empty($_SESSION['file'])) {
    $_SESSION['file'] = htmlspecialchars($_SERVER['PHP_SELF']);
}

switch ($_SESSION['file']) {
    case "/prog-sito-sanitario-final/pages/cittadini.php":
        ?>
        <option class="sort-bar-option" value="A-Z">Nome Alfabetico A-Z</option>
        <option class="sort-bar-option" value="Z-A">Nome Alfabetico Z-A</option>
        <option class="sort-bar-option" value="Crescente">Cognome Alfabetico A-Z</option>
        <option class="sort-bar-option" value="Decrescente">Cognome Alfabetico Z-A</option>
        <?php
        break;
    case "/prog-sito-sanitario-final/pages/ospedale.php": 
        ?>
        <option class="sort-bar-option" value="A-Z">Citta Alfabetico A-Z</option>
        <option class="sort-bar-option" value="Z-A">Citta Alfabetico Z-A</option>
        <option class="sort-bar-option" value="Crescente">Codice Alfabetico A-Z</option>
        <option class="sort-bar-option" value="Decrescente">Codice Alfabetico Z-A</option>
        <?php
        break;
    case "/prog-sito-sanitario-final/pages/patologia.php": 
        ?>
        <option class="sort-bar-option" value="A-Z">Alfabetico A-Z</option>
        <option class="sort-bar-option" value="Z-A">Alfabetico Z-A</option>
        <option class="sort-bar-option" value="Crescente">Criticità Crescente</option>
        <option class="sort-bar-option" value="Decrescente">Criticità Decrescente</option>
        <?php
        break;
    case "/prog-sito-sanitario-final/pages/ricovero.php": 
        ?>
        <option class="sort-bar-option" value="A-Z">Durata Crescente</option>
        <option class="sort-bar-option" value="Z-A">Durata Decrescente</option>
        <option class="sort-bar-option" value="Crescente">Costo Crescente</option>
        <option class="sort-bar-option" value="Decrescente">Costo Decrescente</option>
        <?php
        break; 

    default: break;
}
?>



?>