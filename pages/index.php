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

        </aside>  

        <?php include"../html/homepage.php" ?>

    </div>

    <?php include"../html/footer.html" ?>

    <script>
        function changeImg(){
        const urlBlue = "../imgBlue/";
        const urlOlive = "../img/";
        var url;
        var dashImg = document.getElementsByClassName("dash-img");
        var iconImg = document.getElementById("dash-img");
        var theme = "<?php echo $_SESSION['theme']?>";
        if(theme=="blue"){
            iconImg.setAttribute("src","../imgBlue/icon.png");
        }
        else{
            iconImg.setAttribute("src","../img/icon.png");
        }
        Array.from(dashImg).forEach(img => {
            if (theme == "blue") {
                url = urlBlue + img.id;
            } else {
                url = urlOlive + img.id;
            }
            img.setAttribute("src", url);
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
            changeImg(); 
    });
    </script>

</body>
