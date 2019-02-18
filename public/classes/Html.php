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
    public static function generateTable($array_assoc)
    {
        if (is_array($array_assoc)) {
            echo '<table id="csv-table" class="table table-striped table-bordered">';
            echo '<thead>';
            echo '<tr>';
            list($table_title) = $array_assoc;
            foreach ($table_title as $key => &$value):
                echo '<th>' . $key . '</th>';
            endforeach;
            echo '</tr>';
            echo '</thead>';

            foreach ($array_assoc as &$master):
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