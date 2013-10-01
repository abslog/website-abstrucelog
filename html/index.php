<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="favicon.ico"/>
        <link href="./ui/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
        <title>Abslog</title>
        <link href="common.css" rel="stylesheet"/>
        <link href="index.css" rel="stylesheet"/>
    </head>
    <body>
        <?php include_once("./analyticstracking.php"); ?>

        <div class="container">
            <div class="tabbable">
                <ul id="index-tabs" class="nav nav-pills pull-right">
                    <li class="active"><a class="tab-title" href="#home">Home</a></li>
                    <li><a class="tab-title" href="#project">Projects</a></li>
                    <li><a class="tab-title" href="#blog">Blog</a></li>
                    <li><a class="tab-title" href="#about">About</a></li>
                    <!-- <li><a class="tab-title" href="#contact" data-toggle="tab">Contact Me</a></li> -->
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <?php include './index/home.php';?>
                </div>
                <div class="tab-pane" id="project">
                    <?php include './index/project.php';?>
                </div>
                <div class="tab-pane" id="blog">
                    <?php include './index/blog.php';?>
                </div>
                <div class="tab-pane" id="about">
                    <?php include './index/about.php';?>
                </div>
                <!-- <div class="tab-pane" id="contact">
                    <?php include './index/contact.php';?>
                </div> -->
            </div>
        </div>

        <script src="./ui/lib/jquery/jquery-2.0.3.js"></script>
        <script src="./ui/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="main.js"></script>
    </body>
</html>
