<?php
/**
 * Created by Vincent Riedel
 * Copyright (c) 2020.
 */
require $_SERVER['DOCUMENT_ROOT'] . '/app/config.php';
require $_SERVER['DOCUMENT_ROOT'] . '/app/language.php';
if ($debug == "true"){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    echo "Achtung, der Debugmodus ist aktiv!";
}
if($maintenance == "true"){
    require $_SERVER['DOCUMENT_ROOT'] . '/assets/maintenance.php';
    die();
}
else{
    if (isset($_POST["submit"])) {
        $token = substr(str_shuffle(str_repeat($x = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', ceil(7 / strlen($x)))), 1, 7);
        $statement = $pdo->prepare("INSERT INTO urls (token, url) VALUES (?, ?)");
        $statement->execute(array($token, $_POST["URL"]));
        header("Location: ".$siteurl."?token=".$token);
    }
    if(isset($_GET['token'])){
        echo $siteurl."u/".$_GET['token'];
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
    </head>

    <h2><?php echo $sitename;?></h2>

    <form action="index.php" method="post">
        <label for="fname">URL:</label><br>
        <input type="url" id="URL" name="URL"><br><br>
        <input type="submit" name="submit" value="URL Kürzen">
    </form>
    </html>
<?php
}


