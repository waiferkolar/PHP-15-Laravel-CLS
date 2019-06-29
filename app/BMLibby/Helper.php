<?php
/**
 * Created by PhpStorm.
 * User: 72cod
 * Date: 23/6/2019
 * Time: 12:31
 */

namespace App\BMLibby;


class Helper
{
    public static function beautify($data)
    {
        echo "<pre>" . print_r($data, true) . "</pre>";
    }
}