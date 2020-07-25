<?php
/**
 * Created by Vincent Riedel
 * Copyright (c) 2020.
 */
//Einstellungsmöglichkeiten
$siteurl = "https://domain.tdl";
$sitename = "URLShortner"; #Name der Webseite
$maintenance = "false"; #Wartungsmodus (true/false)
$debug = "false"; #Debugmodus (true/false)
//MySQL
$db_host = 'localhost';
$db_name = 'database';
$db_user = 'user';
$db_password = 'password';
$pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
$con = new mysqli($db_host, $db_user, $db_password, $db_name);


