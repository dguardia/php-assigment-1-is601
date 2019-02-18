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
        foreach ($record as $property => $value)
        {
            $this->createProperty($property, $value);
        }
    }

    public function returnArray()
    {
        $array = (array) $this;
        return $array;
    }

    public function createProperty($name = 'first', $value = 'David')
    {
        $this->{$name} = $value;
    }

}