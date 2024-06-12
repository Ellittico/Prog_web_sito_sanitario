<?php

function connectDb() {

    $servername = "localhost";
    $username = "mntw";
    $password = "7v76NGFQ7qDr";
    $dbname = "my_mntw";


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    return $conn;
}
function buildShowCittadiniSqlQuery($nome, $cognome, $citta, $data_inizio, $data_fine, $order) {
    $sql = "SELECT * FROM CITTADINO WHERE 1=1";

    if (!empty($nome)) {
        $sql .= " AND NOMEcittadino LIKE '%$nome%'";
    }

    if (!empty($cognome)) {
        $sql .= " AND COGNOMEcittadino LIKE '%$cognome%'";
    }

    if (!empty($citta)) {
        $sql .= " AND LUOGONASCITAcittadino LIKE '%$citta%'";
    }

    if (!empty($data_inizio) && !empty($data_fine)) {
        $sql .= " AND DATANASCITAcittadino BETWEEN '$data_inizio' AND '$data_fine'";
    }

    if (!empty($order)) {
        switch ($order) {
            case 'A-Z':
                $sql .= " ORDER BY NOMEcittadino";
                break;
            case 'Z-A':
                $sql .= " ORDER BY NOMEcittadino DESC";
                break;
            case 'Crescente':
                $sql .= " ORDER BY COGNOMEcittadino";
                break;
            case 'Decrescente':
                $sql .= " ORDER BY COGNOMEcittadino DESC";
                break;
        }
    }

    return $sql;
}

function buildShowOspedaliSqlQuery($nome, $codice, $citta, $order) {
    $sql = "SELECT * FROM OSPEDALE WHERE 1=1";

    if (!empty($nome)) {
        $sql .= " AND NOMEospedale LIKE '%$nome%'";
    }

    if (!empty($codice)) {
        $sql .= " AND CODospedale LIKE '%$codice%'";
    }

    if (!empty($citta)) {
        $sql .= " AND CITTAospedale LIKE '%$citta%'";
    }

    if (!empty($order)) {
        switch ($order) {
            case 'A-Z':
                $sql .= " ORDER BY CITTAospedale";
                break;
            case 'Z-A':
                $sql .= " ORDER BY CITTAospedale DESC";
                break;
            case 'Crescente':
                $sql .= " ORDER BY CODospedale";
                break;
            case 'Decrescente':
                $sql .= " ORDER BY CODospedale DESC";
                break;
        }
    }

    return $sql;
}
function buildShowRicoveroSqlQuery($data_inizio, $data_fine, $gg_inizio, $gg_fine, $costo_inizio, $costo_fine, $order) {
    $sql = "SELECT * FROM RICOVERO AS R
            LEFT JOIN PATOLOGIA AS P ON P.CODpatologia=R.MOTIVOricovero
            WHERE 1=1";

    if (!empty($data_inizio) && !empty($data_fine)) {
        $sql .= " AND STR_TO_DATE(DATAricovero, '%d-%m-%Y') BETWEEN STR_TO_DATE('$data_inizio', '%Y-%m-%d') AND STR_TO_DATE('$data_fine', '%Y-%m-%d')";
    }

    if ((!empty($gg_inizio) || $gg_inizio == 0) && !empty($gg_fine)) {
        $sql .= " AND DURATAricovero BETWEEN $gg_inizio AND $gg_fine";
    }

    if ((!empty($costo_inizio) || $costo_inizio == 0) && !empty($costo_fine)) {
        $sql .= " AND COSTOricovero BETWEEN $costo_inizio AND $costo_fine";
    }

    if (!empty($order)) {
        switch ($order) {
            case 'A-Z':
                $sql .= " ORDER BY DURATAricovero";
                break;
            case 'Z-A':
                $sql .= " ORDER BY DURATAricovero DESC";
                break;
            case 'Crescente':
                $sql .= " ORDER BY COSTOricovero";
                break;
            case 'Decrescente':
                $sql .= " ORDER BY COSTOricovero DESC";
                break;
        }
    }

    return $sql;
}
function buildShowPatologieSqlQuery($NOMEpatologia, $CODpatologia, $gravita, $OPT, $order) {
    $sql = "SELECT P.CODpatologia, P.NOMEpatologia, P.CRITICITApatologia, PC.CRONICA, PM.MORTALE
            FROM PATOLOGIA AS P 
            LEFT JOIN PATOLOGIACRONICA AS PC ON P.CODpatologia=PC.CODpatologia
            LEFT JOIN PATOLOGIAMORTALE AS PM ON P.CODpatologia=PM.CODpatologia";

    if ($OPT == "opzione1") {
        $sql .= " WHERE CRONICA = 'true'";
    } else if ($OPT == "opzione2") {
        $sql .= " WHERE MORTALE = 'true'";
    } else if (empty($OPT) || $OPT == "opzione3") {
        $sql .= " WHERE MORTALE IN (0, 1)";
    }

    if (!empty($gravita)) {
        $sql .= " AND CRITICITApatologia = $gravita";
    }

    if (!empty($NOMEpatologia)) {
        $sql .= " AND NOMEpatologia LIKE '%$NOMEpatologia%'";
    }

    if (!empty($CODpatologia)) {
        $sql .= " AND CODpatologia LIKE '%$CODpatologia%'";
    }

    if (!empty($order)) {
        switch ($order) {
            case 'A-Z':
                $sql .= " ORDER BY NOMEpatologia";
                break;
            case 'Z-A':
                $sql .= " ORDER BY NOMEpatologia DESC";
                break;
            case 'Crescente':
                $sql .= " ORDER BY CRITICITApatologia";
                break;
            case 'Decrescente':
                $sql .= " ORDER BY CRITICITApatologia DESC";
                break;
        }
    }

    return $sql;
}
function displayCittadinoRecord($riga) {
    ?>
    <div class="records-cittadini">
        <div><?php echo htmlspecialchars($riga["CSSNcittadino"]); ?></div>
        <div><?php echo htmlspecialchars($riga["NOMEcittadino"]); ?></div>
        <div><?php echo htmlspecialchars($riga["COGNOMEcittadino"]); ?></div>
        <div><?php echo htmlspecialchars($riga["INDIRIZZOcittadino"]); ?></div>
        <div><?php echo htmlspecialchars($riga["LUOGONASCITAcittadino"]); ?></div>
        <div><?php echo htmlspecialchars($riga["DATANASCITAcittadino"]); ?></div>
    </div>
    <?php
}

function displayOspedaleRecord($riga) {
    ?>
    <div class="records-ospedale">
        <div><?php echo htmlspecialchars($riga["CODospedale"]); ?></div>
        <div><?php echo htmlspecialchars($riga["NOMEospedale"]); ?></div>
        <div><?php echo htmlspecialchars($riga["CITTAospedale"]); ?></div>
        <div><?php echo htmlspecialchars($riga["INDIRIZZOospedale"]); ?></div>
    </div>
    <?php
}
function displayRicoveroRecord($riga, $i) {
    ?>
    <div class="records-ricovero" id="rec-<?php echo $i; ?>"> 
        <div><button class="delete-record"  onclick="deleteRecord('<?php echo addslashes($riga['CODricovero']); ?>')"> &#10005; </button></div>
        <div><?php echo htmlspecialchars($riga["CODricovero"]); ?></div>
        <div><?php echo htmlspecialchars($riga["CODospedale"]); ?></div>
        <div><?php echo htmlspecialchars($riga["COSTOricovero"]); ?></div>
        <div><?php echo htmlspecialchars($riga["DATAricovero"]); ?></div>
        <div><?php echo htmlspecialchars($riga["DURATAricovero"]); ?></div>
        <div><?php echo htmlspecialchars(!empty($riga["NOMEpatologia"]) ? $riga["NOMEpatologia"] : $riga["MOTIVOricovero"]); ?></div>
        <div><?php echo htmlspecialchars($riga["PAZIENTEricovero"]); ?></div>
        <button class="modify" onclick="openModify(<?php echo $i; ?>, '<?php echo addslashes($riga['CODricovero']); ?>')"></button>
    </div>
    <?php
}
function displayPatologiaRecord($riga) {
    ?>
    <div class="records-patologia"> 
        <div><?php echo htmlspecialchars($riga["NOMEpatologia"]); ?></div>
        <div><?php echo htmlspecialchars($riga["CODpatologia"]); ?></div>
        <div><?php echo htmlspecialchars($riga["CRITICITApatologia"]); ?></div>
        <div><?php echo htmlspecialchars($riga["CRONICA"]); ?></div>
        <div><?php echo htmlspecialchars($riga["MORTALE"]); ?></div>
    </div>
    <?php
}

function displayNoResults() {
    ?>
    <div class="noResult">
        <img style="border-radius:20px;" src="../img/Noresults.gif">
        <p>Nessun Risultato Trovato!</p>
    </div>
    <?php
}