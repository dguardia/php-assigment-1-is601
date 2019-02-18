<?php
/**
 * Created by PhpStorm.
 * User: davidguardia
 * Date: 2019-02-17
 * Time: 19:11
 */

namespace Main;
require_once ('RecordFactory.php');

class CSVParser
{
    public static $delimiter = ',';

    /**
     * @param $filename
     * @return array
     */
    static public function getRecords($filename){
        $file = fopen($filename, 'r');
        $fieldName = array();
        $count = 0;
        $rows = array();
        while(!feof($file)) {
            $row = fgetcsv($file, 2000, self::$delimiter);
            if($count == 0) {
                $fieldName = $row;
            } else {
                $rows[] = RecordFactory::create($fieldName, $row);
            }
            $count++;

        }
        fclose($file);
        return $rows;
    }
}