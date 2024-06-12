<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<?php include"../php/gestioneVar.php" ?>
<?php include"../php/gestioneTema.php" ?>


<body>
    <?php 
    /*debug
        echo "<pre>";
        print_r($_SESSION); 
        echo "</pre>";
    debug*/
    include"../html/header.html" ?>
    <div class="divider">
        <aside class="aside-menu">
            <?php include"../html/navbar.html" ?>
            <?php include"../html/filtroRicercaOspedale.html" ?>
        </aside>    
        <div class="master">
            <?php include"../html/ordering.php" ?>
            <div class="container">
                <?php include"../html/titleResultsOspedale.html" ?>
                <?php include"../php/resultOspedale.php" ?>
            </div>    
        </div>
    </div>
    <?php include"../html/footer.html" ?>
</body>