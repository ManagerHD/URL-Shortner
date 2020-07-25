<?php
/**
 * Created by Vincent Riedel
 * Copyright (c) 2020.
 */

require $_SERVER['DOCUMENT_ROOT'] . '/app/languageLoader.php';
$ll = new LanguageLoader();

session_start();
if (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) == "de") {
    $_SESSION['locale'] = "de_DE";
} else {
    $_SESSION['locale'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}

