<?php
/**
 * Created by PhpStorm.
 * User: davidguardia
 * Date: 2019-02-17
 * Time: 19:29
 */
class footerHeader
{
    static public function getHead(){
        $links = [
            '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">',
            '<link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">',
            '<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">',
            '<link href="../styles/styles.css" rel="stylesheet" type="text/css">'
        ];

        foreach ($links as $link)
        {
            echo $link;
        }
    }

    static public function getFooter()
    {
        $scripts = [
            '<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>',
            '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>',
            '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>',
            '<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>',
            '<script src="../js/app.js" crossorigin="anonymous"></script>'
        ];
        foreach ($scripts as $script)
        {
            echo $script;
        }
    }
}

