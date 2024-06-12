<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<?php include"../php/gestioneVar.php" ?>
<?php include"../php/gestioneTema.php" ?>

<body>
    <?php 
        include"../html/header.html" 
        ?>
    <div class="divider">
        <aside class="aside-menu">
            <?php include"../html/navbar.html" ?>
            <?php include"../html/filtroRicercaCittadino.html" ?>
        </aside>    
        <div class="master">
            <?php include"../html/ordering.php" ?>
            <div class="container">
                <?php include"../html/titleResultsCittadini.html" ?>
                <?php include"../php/resultCittadini.php" ?>
            </div>    
        </div>
    </div>
    <?php include"../html/footer.html" ?>
</body>
<script src="../js/scrollPosition.js"></script>