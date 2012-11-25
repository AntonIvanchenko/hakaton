<!DOCTYPE HTML>
<head>
	<meta charset="UTF-8">
    <meta name="description" content="">
	<title>index</title>
    <link type="text/css" href="css/normalize.css" rel="stylesheet">
    <link type="text/css" href="css/style.css" rel="stylesheet">
    <link type="text/css" href="css/skeleton.css" rel="stylesheet">
    <link type="text/css" href="css/layout.css" rel="stylesheet">
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.easing-1.3.pack.js" type="text/javascript"></script>
    <script src="js/jquery.mousewheel-3.0.4.pack.js" type="text/javascript"></script>
    <script src="js/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
    <script src="js/superfish.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <div class="container_12 clearfix">
            <div class="grid_12">
                <h1><a href="index.html"><img src="img/logo.png" alt=""></a></h1>
                <ul id="menu" class="sf-menu">
                    <li>
                        <a href="#">Special Offers</a>
                    </li>
                    <li><a href="#">About</a></li>
                    <li class="paddingRight"><a href="#">FAQ</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </header>

<?php
	echo $this->layout ()->content;
?>

    <footer>
        <div class="container_12 clearfix">
            <div class="grid-12">
                Resuminute &copy; 2012 Privacy Policy
            </div>
        </div>
    </footer>
</body>
</html>