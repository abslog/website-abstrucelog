<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="favicon.ico"/>
        <link href="./ui/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
        <title>Abslog</title>
        <link href="general.css" rel="stylesheet"/>
    </head>
    <body>
        <?php include_once("./analyticstracking.php"); ?>

        <div class="container">
            <div class="tabbable">
                <img src="AbsLogSqLog.png" class="logo-img" height="60px" width="60px">
                <ul class="nav nav-pills pull-right">
                    <li class="active"><a class="tab-title" href="#home" data-toggle="tab">Home</a></li>
                    <li><a class="tab-title" href="#about" data-toggle="tab">Blogs</a></li>
                    <li><a class="tab-title" href="#about" data-toggle="tab">About</a></li>
                    <li><a class="tab-title" href="#about" data-toggle="tab">Contact Me</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <?php include './index/home.php';?>
                </div>
                <div class="tab-pane" id="about">
                    
                </div>
            </div>
        </div>

        <script src="./ui/lib/jquery/jquery-2.0.3.js"></script>
        <script src="./ui/lib/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
