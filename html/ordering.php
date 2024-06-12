<div class="ordering">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> ">
        <div class="sort-bar">
            <label for="sort-select">Ordina per:</label>
            <select id="sort-select" name="order">
                <?php include "../php/gestioneOrdering.php" ?>
            </select>
        </div>
        <button type="submit" name="cercaOrdine" id="ordering-submit"> Ordina</button>
    </form>
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