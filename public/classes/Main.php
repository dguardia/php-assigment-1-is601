<?php

namespace Main;
require_once ('CSVParser.php');
require_once ('RecordFactory.php');
require_once ('Record.php');
require_once ('Html.php');

class Main
{
    static public function start($filename)
    {
        $records = CSVParser::getRecords($filename);

        $table = html::generateTable($records);

//        foreach ($records as $record)
//        {
////            echo "<pre>";
////                print_r($record);
////            echo "</pre>";
//            $array = $record->returnArray();
//            echo "<pre>";
//                var_dump($array);
//            echo "</pre>";
//        }

        /*
         *  echo "<pre>";
            print_r($records);
            echo "</pre>";
         * */
        //return $records;
    }
}