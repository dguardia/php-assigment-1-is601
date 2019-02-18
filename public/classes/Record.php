<?php
/**
 * Created by PhpStorm.
 * User: davidguardia
 * Date: 2019-02-17
 * Time: 21:07
 */

namespace Main;
require_once ('CSVParser.php');

class Record
{
    public function __construct(Array $fieldNames = null, Array $values = null)
    {

        $record = array_combine($fieldNames, $values);
        echo "<pre>";
            print_r($record);
        echo "</pre>";
        echo "<hr />";
        $this->createProperty();
    }

    public function createProperty($name = 'first', $value = 'David')
    {
        $this->{$name} = $value;
    }

}