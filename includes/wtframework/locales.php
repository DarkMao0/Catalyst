<?php
$ip = $_SERVER['REMOTE_ADDR'];

if (!in_array($ip, ["localhost", "127.0.0.1"]))
{
    $geoDetails = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));

    $regionLocales = array(
        "Russian" => array(
            "localeCode" => "ru-RU",
            "regions" => array("RU", "BY", "KZ", "UA")
        ),
        "English" => array(
            "localeCode" => "en-US",
            "regions" => array()
        ),
    );


    $locale_data = "";
    if (in_array($geoDetails->country, $regionLocales["Russian"]["regions"])) {
        $locale_data = file_get_contents(realpath(__DIR__ . '/../..') . '\data\locales\\' . $regionLocales["Russian"]["localeCode"] . '.json');
    } else {
        $locale_data = file_get_contents(realpath(__DIR__ . '/../..') . '\data\locales\\' . $regionLocales["English"]["localeCode"] . '.json');
    }

    $GLOBALS["locale"] = json_decode($locale_data, JSON_OBJECT_AS_ARRAY);
} else {
    /* Default language sets right there */
    /* Стандартный язык устанавливается здесь */
    $locale_data = file_get_contents(realpath(__DIR__ . '/../..') . '\data\locales\\ru-RU.json');
    $GLOBALS["locale"] = json_decode($locale_data, JSON_OBJECT_AS_ARRAY);
}