<?php
require_once('./config.php');

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
        //include('sheet_manager');
        //header("Location: ./sheet_manager");
        header("Location: " . $app_path . "/sheet_manager");
        break;

    case 'none':
        include('./view/header.php');
        include('./view/footer.php');
        break;
}