<?php

namespace Main;
require_once ('CSVParser.php');
require_once ('RecordFactory.php');

class Main
{
    static public function start($filename)
    {
        $records = CSVParser::getRecords($filename);

        /*
         *  echo "<pre>";
            print_r($records);
            echo "</pre>";
         * */
        return $records;
    }
}