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
    public static function create(Array $fieldNames = null, Array $values = null)
    {
        $record = new Record($fieldNames, $values);
        return $record;
    }
}