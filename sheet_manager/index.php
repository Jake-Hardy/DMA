<?php
require_once('../config.php');

if (isset($_POST['action'])) {
    $action = filter_var($_POST['action'], FILTER_SANITIZE_STRING);
}
else if (isset($_GET['action'])) {
    $action = filter_var($_GET['action'], FILTER_SANITIZE_STRING);
}
else {
    $action = 'new_character';
}

switch($action) {
    case 'new_character':
        $page = "sheetCreator";

        include('../view/header.php');
        include('../view/character_sheet_form.php');
        include('../view/footer.php');
        break;

    case 'submit_sheet':
        $characterName = filter_var($_POST['characterName'], FILTER_SANITIZE_STRING);

        $class = filter_var($_POST['class'], FILTER_SANITIZE_STRING);
        $level = filter_var($_POST['level'], FILTER_SANITIZE_NUMBER_INT);
        $race = filter_var($_POST['race'], FILTER_SANITIZE_STRING);
        $alignment = filter_var($_POST['alignment'], FILTER_SANITIZE_STRING);

        $armorClass = filter_var($_POST['armorClass'], FILTER_SANITIZE_NUMBER_INT);
        $initiative = filter_var($_POST['initiative'], FILTER_SANITIZE_NUMBER_INT);
        $speed = filter_var($_POST['speed'], FILTER_SANITIZE_NUMBER_INT);
        $maxHealth = filter_var($_POST['maxHealth'], FILTER_SANITIZE_NUMBER_INT);
        $currentHealth = filter_var($_POST['currentHealth'], FILTER_SANITIZE_NUMBER_INT);

        $str = filter_var($_POST['str'], FILTER_SANITIZE_NUMBER_INT);
        $con = filter_var($_POST['con'], FILTER_SANITIZE_NUMBER_INT);
        $dex = filter_var($_POST['dex'], FILTER_SANITIZE_NUMBER_INT);
        $cha = filter_var($_POST['cha'], FILTER_SANITIZE_NUMBER_INT);
        $int = filter_var($_POST['int'], FILTER_SANITIZE_NUMBER_INT);
        $wis = filter_var($_POST['wis'], FILTER_SANITIZE_NUMBER_INT);

        $sheetFile = fopen("../sheets/test.txt", "w") or die ("Unable to open file");

        fwrite($sheetFile, $characterName . '|');

        fwrite($sheetFile, $class . '|');
        fwrite($sheetFile, $level . '|');
        fwrite($sheetFile, $race . '|');
        fwrite($sheetFile, $alignment . '|');

        fwrite($sheetFile, $armorClass . '|');
        fwrite($sheetFile, $initiative . '|');
        fwrite($sheetFile, $speed . '|');
        fwrite($sheetFile, $maxHealth . '|');
        fwrite($sheetFile, $currentHealth . '|');

        fwrite($sheetFile, $str . '|');
        fwrite($sheetFile, $con . '|');
        fwrite($sheetFile, $dex . '|');
        fwrite($sheetFile, $wis . '|');
        fwrite($sheetFile, $int . '|');
        fwrite($sheetFile, $cha . '|');

        fclose($sheetFile);

        header("Location: " . $app_path . '?action=none');
        break;

    case 'open_sheet':
        $sheetFile = fopen("../sheets/test.txt", "r") or die ("Unable to open file");
        $sheetContents = fread($sheetFile, filesize("../sheets/test.txt"));
        $sheetContents = explode("|", $sheetContents);

        $characterName = $sheetContents[0];

        $class = $sheetContents[1];
        $level = $sheetContents[2];
        $race = $sheetContents[3];
        $alignment = $sheetContents[4];

        $armorClass = $sheetContents[5];
        $initiative = $sheetContents[6];
        $speed = $sheetContents[7];
        $maxHealth = $sheetContents[8];
        $currentHealth = $sheetContents[9];

        $str = $sheetContents[10];
        $con = $sheetContents[11];
        $dex = $sheetContents[12];
        $cha = $sheetContents[13];
        $int = $sheetContents[14];
        $wis = $sheetContents[15];

        $page = "sheetCreator";

        include('../view/header.php');
        include('../view/character_sheet_form.php');
        include('../view/footer.php');
        break;
}


