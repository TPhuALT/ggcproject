<?php
    session_start();
    require_once("./php/connect_MySQL_n_log.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <title>Liên hệ</title>
        <link rel="icon" href="./resources/favicon.png">
        <link rel="stylesheet" href="css/index.css">
    </head>

    <body>
        <div id="container">
            <?php require_once("./html/header.php"); ?>

            <!--Nội dung của trang-->
            <div class="container-content">
                <div class="box-content">
                    <h3>Liên hệ:</h3>
                    <p>113: Cảnh sát</p>
                    <p>114: Cứu hoả</p>
                    <p>115: Cứu thương</p>
                </div>
            </div>
            <?php 
            echo file_get_contents("./html/footer.html");
            ?>
        </div>
    </body>
</html>

