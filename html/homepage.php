<div class="dashboard">
    <p id="dash-title"> Portale Sanitario Regionale </p>
    <p class="dash-text"> Portale Regionale per la gestione degli ospedali in <b><u>regione</u></b>, 
        <b>accedi</b> e <b>visulizza  </b>i risultati in base alle principali aree di interesse </p>
    <img id="dash-img"  src="../img/icon.png">
    <p class="dash-text"> <b>Cerca</b> i tuoi risultati in base alle seguenti <b><u>aree di interesse</u></b>:</p>
    <diV class="dash-button-container">
        <div class="dash-item" id="ospedale"> 
            <p class="dash-text text-item" > <a class="link-page" href="../pages/ospedale.php" >Ospedale </a></p>
            <img class="dash-img" id="dash-ospedale.png" src="../img/dash-ospedale.png">
        </div>
        <div class="dash-item" id="ricovero"> 
            <p class="dash-text text-item"> <a class="link-page" href="../pages/ricovero.php">Ricovero</a></p>
            <img class="dash-img" id="dash-ricovero.png" src="../img/dash-ricovero.png">
        </div>
        <div class="dash-item" id="cittadini"> 
            <p class="dash-text text-item"> <a class="link-page" href="../pages/cittadini.php">Cittadino</a> </p>
            <img class="dash-img" id="dash-cittadino.png" src="../img/dash-cittadino.png">
        </div>
        <div class="dash-item" id="patologia"> 
            <p class="dash-text text-item"> <a class="link-page" href="../pages/patologia.php">Patologia</a></p>
            <img class="dash-img" id="dash-patologia.png" src="../img/dash-patologia.png">
        </div>
    </div>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <input type="hidden" name="theme" id="theme-input">
        <div class="theme">
            <p class="theme-text">Scegli tema:</p>
            <button class="light-blue" onclick="setTheme('blue')"></button>
            <button class="olive" onclick="setTheme('olive')"></button>
        </div>
    </form>
    <script>
        function setTheme(theme) {
            document.getElementById("theme-input").value = theme;
            document.forms[0].submit();
        }
    </script>
</div>