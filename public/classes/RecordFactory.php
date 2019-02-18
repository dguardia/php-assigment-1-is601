<?php
/**
 * Created by PhpStorm.
 * User: davidguardia
 * Date: 2019-02-17
 * Time: 21:08
 */

namespace Main;
require_once ('Record.php');

class RecordFactory
{
    public static function create(Array $array = null)
    {
        $record = new Record();

        return $record;
    }
}