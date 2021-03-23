<?php

declare(strict_types=1);

namespace App\Controllers;

use RedBeanPHP\R;

/**
 * This abstract class defines methods and properties used by all controllers.
 *
 * @package App\Controllers
 */
abstract class AbstractController
{
    function dd($value)
    {
        echo "<pre>";
        print_r($value);
        exit;
    }

    function setCookie($name, $value)
    {
        setcookie($name, $value);
    }

    function getCookie($name)
    {
        return $_COOKIE[$name];
    }

    function getLang()
    {
        $lang =  R::getAll('SELECT * FROM cms_lang WHERE language = :lang', [':lang' => $_SESSION['language']]);
        $lang_array = array();
        foreach ($lang as $translate) {
            $lang_array[$translate['str_key']] = $translate['text'];
        }

        return $lang_array;
    }
}
