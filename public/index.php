<?php
include ('./shared/footerHeader.php');
require_once ('./classes/Main.php');
use Main\Main;
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Read CSV file</title>
    <?php footerHeader::getHead(); ?>
</head>

<body>
<div class="main">
    <section class="header">
        <div class="container">
            <h1 class="title">Hello IS601</h1>
            <h2 class="host" style=""><?php echo gethostname(); ?></h2>
            <h3 class="host"><?php echo "Deploying from Github" . "<br />"; ?></h3>
        </div>
    </section>
    <section class="content">
        <div class="container">
            <div class="row">
                <h2 class="table-title"><?php echo "CSV file and output an HTML table"; ?></h2>
                <p class="lead">The Sacramento real estate transactions file is a list of 985 real estate transactions in the Sacramento area reported over a five-day period, as reported by the Sacramento Bee. Note that this file has address level information that you can choose to geocode, or you can use the existing latitude/longitude in the file.</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <?php
                    $filename = "./data/salesJan2009.csv"; //salesJan2009.csv
                    Main::start($filename);
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>
    <?php //phpinfo(); ?>
    <?php footerHeader::getFooter();?>
    </body>
</html>


