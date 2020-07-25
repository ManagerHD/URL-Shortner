<?php
/**
 * Created by Vincent Riedel
 * Copyright (c) 2020.
 */
require $_SERVER['DOCUMENT_ROOT'] . '/app/config.php';
if ($debug == "true"){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    echo "Achtung, der Debugmodus ist aktiv!";
}
$salt = $_GET['salt'];
$sql = "SELECT * FROM `urls` WHERE `token` LIKE '$salt'";
foreach ($pdo->query($sql) as $row){
    header("Location: ".$row['url']);
}
