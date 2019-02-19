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
        $table = Html::generateTable($records);
    }
}