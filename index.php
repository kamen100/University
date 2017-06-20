<?php
session_start();
            if (isset($_GET['page'])) {
                $page_name = $_GET['page'];
                include ("pages/" . $page_name . ".php");
            } else {
                include("pages/home.php");
            }
?><!DOCTYPE html>
<html>
    <head>
        <title>СИС</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="icon" type="image/png" sizes="32x32" href="pictures/favicon.ico">
    </head>
    <body>
        <div id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="index.php"><img src="pictures/logo.png"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">                            
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <footer>
		<?php
?>
        </footer>
    </body>
</html>