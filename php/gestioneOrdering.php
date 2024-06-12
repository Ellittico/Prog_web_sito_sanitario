<?php
if (empty($_SESSION['file'])) {
    $_SESSION['file'] = htmlspecialchars($_SERVER['PHP_SELF']);
}

switch ($_SESSION['file']) {
    case "/prog-sito-sanitario-final/pages/cittadini.php":
        $selectedOption = $_SESSION['order'] ?? ''; // Ottieni l'opzione selezionata precedentemente, se esiste
        ?>
        <option class="sort-bar-option" value="A-Z" <?php echo ($selectedOption == 'A-Z') ? 'selected' : ''; ?>>Nome Alfabetico A-Z</option>
        <option class="sort-bar-option" value="Z-A" <?php echo ($selectedOption == 'Z-A') ? 'selected' : ''; ?>>Nome Alfabetico Z-A</option>
        <option class="sort-bar-option" value="Crescente" <?php echo ($selectedOption == 'Crescente') ? 'selected' : ''; ?>>Cognome Alfabetico A-Z</option>
        <option class="sort-bar-option" value="Decrescente" <?php echo ($selectedOption == 'Decrescente') ? 'selected' : ''; ?>>Cognome Alfabetico Z-A</option>
        <?php
        break;
    case "/prog-sito-sanitario-final/pages/ospedale.php":
        $selectedOption = $_SESSION['order'] ?? ''; // Ottieni l'opzione selezionata precedentemente, se esiste 
        ?>
        <option class="sort-bar-option" value="A-Z" <?php echo ($selectedOption == 'A-Z') ? 'selected' : ''; ?>>Citta Alfabetico A-Z</option>
        <option class="sort-bar-option" value="Z-A" <?php echo ($selectedOption == 'Z-A') ? 'selected' : ''; ?>>Citta Alfabetico Z-A</option>
        <option class="sort-bar-option" value="Crescente" <?php echo ($selectedOption == 'Crescente') ? 'selected' : ''; ?>>Codice Alfabetico A-Z</option>
        <option class="sort-bar-option" value="Decrescente" <?php echo ($selectedOption == 'Decrescente') ? 'selected' : ''; ?>>Codice Alfabetico Z-A</option>        <?php
        break;
    case "/prog-sito-sanitario-final/pages/patologia.php":
        $selectedOption = $_SESSION['order'] ?? ''; // Ottieni l'opzione selezionata precedentemente, se esiste 
        ?>
       <option class="sort-bar-option" value="A-Z" <?php echo ($selectedOption == 'A-Z') ? 'selected' : ''; ?>>Alfabetico A-Z</option>
        <option class="sort-bar-option" value="Z-A" <?php echo ($selectedOption == 'Z-A') ? 'selected' : ''; ?>>Alfabetico Z-A</option>
        <option class="sort-bar-option" value="Crescente" <?php echo ($selectedOption == 'Crescente') ? 'selected' : ''; ?>>Criticità Crescente</option>
        <option class="sort-bar-option" value="Decrescente" <?php echo ($selectedOption == 'Decrescente') ? 'selected' : ''; ?>>Criticità Decrescente</option>        <?php
        break;
    case "/prog-sito-sanitario-final/pages/ricovero.php": 
        $selectedOption = $_SESSION['order'] ?? ''; // Ottieni l'opzione selezionata precedentemente, se esiste
        ?>
        <option class="sort-bar-option" value="A-Z" <?php echo ($selectedOption == 'A-Z') ? 'selected' : ''; ?>>Durata Crescente</option>
        <option class="sort-bar-option" value="Z-A" <?php echo ($selectedOption == 'Z-A') ? 'selected' : ''; ?>>Durata Decrescente</option>
        <option class="sort-bar-option" value="Crescente" <?php echo ($selectedOption == 'Crescente') ? 'selected' : ''; ?>>Costo Crescente</option>
        <option class="sort-bar-option" value="Decrescente" <?php echo ($selectedOption == 'Decrescente') ? 'selected' : ''; ?>>Costo Decrescente</option>        <?php
        break; 

    default: break;
}
?>



?>