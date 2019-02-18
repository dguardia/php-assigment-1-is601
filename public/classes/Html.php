<?php
/**
 * Created by PhpStorm.
 * User: davidguardia
 * Date: 2019-02-18
 * Time: 03:20
 */

namespace Main;
require_once('Record.php');

class Html
{
    public static function generateTable($csv_record_array)
    {
        if (is_array($csv_record_array)) {
            echo '<table id="csv-table" class="table table-striped table-bordered">';
            echo '<thead>';
            echo '<tr>';
            list($table_title) = $csv_record_array;
            foreach ($table_title as $key => &$value):
                echo '<th>' . strtoupper($key) . '</th>';
            endforeach;
            echo '</tr>';
            echo '</thead>';

            foreach ($csv_record_array as &$master):
                echo '<tr>';
                foreach ($master as &$slave):
                    echo '<td>' . $slave . '</td>';
                endforeach;
                echo '</tr>';
            endforeach;
            echo '</table>';
            return;
        }

    }
}