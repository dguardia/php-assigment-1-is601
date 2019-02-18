<?php
/**
 * Created by PhpStorm.
 * User: davidguardia
 * Date: 2019-02-17
 * Time: 19:11
 */

namespace Main;


class CSVParser
{
    public static $delimiter = ',';

    static public function getRecords($filename){
        $file = fopen($filename, 'r');
        $rows = array();
        while(!feof($file)) {
            $row = fgetcsv($file, 0, self::$delimiter);

            $rows[] = RecordFactory::create();
        }
        fclose($file);
        return $rows;
    }
}