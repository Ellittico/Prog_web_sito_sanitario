<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<?php include"../php/gestioneVar.php" ?>
<?php include"../php/gestioneTema.php" ?>

<body>
    <?php include"../html/header.html" ?>
    <div class="divider">
        <aside class="aside-menu">
            <?php include"../html/navbar.html" ?>
            <?php include"../html/filtroRicercaRicovero.html" ?>
        </aside>    
        <div class="master">
            <?php include"../html/ordering.php" ?>
            <?php include"../html/adding.html" ?>
            <div class="container">
                <?php include"../html/titleResultsRicovero.html" ?>
                <?php include"../php/resultRicovero.php" ?>
            </div>    
        </div>
    </div>
    <?php include"../html/footer.html" ?>
    <script>
        function changeImg(){
            var iconMod = document.getElementById("iconMod");
            var theme = "<?php echo $_SESSION['theme']?>";
            if (theme == "blue") {
                iconMod.setAttribute("src","../imgBlue/icon-modifica.png");
            } else {
                iconMod.setAttribute("src","../img/icon-modifica.png");
            }
        }
        document.addEventListener('DOMContentLoaded', function() {
            changeImg(); 
        });
    </script>
</body>
<script src="../js/scrollPosition.js"></script>