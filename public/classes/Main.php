<?php

namespace Main;
require_once ('CSVParser.php');
class Main
{
    static public function start($filename)
    {
        $records = CSVParser::getRecords($filename);
        echo "<pre>";
            print_r($records);
        echo "</pre>";
    }
}