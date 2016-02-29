<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Cinzel+Decorative:400,700,900|Josefin+Sans:400,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/3.0.3/normalize.css">
        <link rel="stylesheet" href="<?php echo $app_path . '/css/main_styles.css'; ?>">
        <?php
            if($page == "sheetCreator") {
                echo '<link rel="stylesheet" href="' . $app_path . '/css/sheet_styles.css">';
            }
        ?>
        <title>DM's Assistant</title>
    </head>

    <body>
    <div class="container">
        <header class="main-header clearfix">
            <h1 class="name">DM's Assistant</h1>
            <ul class="main-nav">
                <li><a href="<?php echo $app_path . '?action=none'; ?>">Home</a></li>
                <li><a href="<?php echo $app_path . '/sheet_manager'; ?>">New Character</a></li>
                <li><a href="<?php echo $app_path . '/sheet_manager?action=open_sheet'; ?>">
                        Load Sheet
                    </a></li>
            </ul>
        </header>
    </div>