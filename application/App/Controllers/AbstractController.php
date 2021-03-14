<?php

declare(strict_types=1);

namespace App\Controllers;

/**
 * This abstract class defines methods and properties used by all controllers.
 *
 * @package App\Controllers
 */
abstract class AbstractController
{
    function dd($value){
        return die(var_dump($value));
    }
}
