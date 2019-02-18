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
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <?php
                    Main::start("./data/salesJan2009.csv");

                    //$filename = 'techCrunchUSA.csv'; //salesJan2009.csv
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>

<!--<div class="container">-->
<!--    <div class="row">-->
<!---->
<!--    </div>-->
<!--</div>-->
    <?php //phpinfo(); ?>
    <?php footerHeader::getFooter();?>
    </body>
</html>


