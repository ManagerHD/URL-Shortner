<?php
/**
 * Created by Vincent Riedel
 * Copyright (c) 2020.
 */

class LanguageLoader
{
    private $supportedLangs = array("Deutsch" => "de_DE", "English" => "en");
    private $messages;

    public function __construct()
    {
        if (isset($_SESSION['locale'])) {
            if (array_search($_SESSION['locale'], $this->supportedLangs)) {
                $lang = $_SESSION['locale'];
            } else {
                $lang = "en";
            }
        } else {
            $lang = "en";
        }
        $file = dirname(__FILE__) . "/languages/" . $lang . ".json";

        $json = file_get_contents($file);
        $this->messages = json_decode($json, true);
    }

    public function getMessage($key)
    {
        return $this->messages[$key];
    }

    public function getSupportedLangs()
    {
        return $this->supportedLangs;
    }
}

