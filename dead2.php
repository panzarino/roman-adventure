<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Go On an Adventure in Rome">
    <meta name="author" content="Zach Panzarino">
    <title>Roman Adventure</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="img/icon.png">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="/"  onclick = $("#menu-close").click(); >Roman Adventure</a>
            </li>
            <li>
                <a href="/" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="start.php" onclick = $("#menu-close").click(); >Restart</a>
            </li>
        </ul>
    </nav>
    <header id="top" class="header" style="background: url(img/cerberus.jpg) no-repeat center center scroll;-webkit-background-size: cover;-moz-background-size: cover;background-size: cover;-o-background-size: cover;">
        <div class="text-vertical-center">
            <img src="img/skull.png" height="100px" width="100px"><br><br><br>
            <?php
            $name = $_GET['name'];
            $past = $_GET['job'];
            echo "<p style='font-size:20px'><mark>You are now boing judged by Minos, Rhadamanthos and Aeacus.<br><br>\"What is your name?\"<br>\"".$name.".\"<br>\"What did you do in life?\"<br>";
            if ($past==="farmer"){
                echo "\"I was a simple farmer. I spent most of my life on my simple farm\"<br>\"Step right this way\"</mark></p>";
                echo '<form class="form-inline" action="asphodel.php" method="get">';
            echo '<input type="hidden" name="name" value="'.$name.'">';
            echo '<button type="submit" class="btn btn-default">Continue</button></form>';
            }
            elseif ($past==="deadsoldier"){
                echo "\"I was a soldier for the Roman Army. I was killed in battle\"<br>\"Step right this way\"</mark></p>";
                echo '<form class="form-inline" action="elysium.php" method="get">';
            echo '<input type="hidden" name="name" value="'.$name.'">';
            echo '<button type="submit" class="btn btn-default">Continue</button></form>';
            }
            elseif ($past==="goodsoldier"){
                echo "\"I was one of the best Roman Generals. I then retired to a farm.\"<br>\"Step right this way\"</mark></p>";
                echo '<form class="form-inline" action="elysium.php" method="get">';
            echo '<input type="hidden" name="name" value="'.$name.'">';
            echo '<button type="submit" class="btn btn-default">Continue</button></form>';
            }
            elseif ($past==="grapesfarmer"){
                echo "\"I grew grapes for the Emperor. I have been a farmer all my life\"<br>\"Step right this way\"</mark></p>";
                echo '<form class="form-inline" action="asphodel.php" method="get">';
            echo '<input type="hidden" name="name" value="'.$name.'">';
            echo '<button type="submit" class="btn btn-default">Continue</button></form>';
            }
            elseif ($past==="badgrapesfarmer"){
                echo "\"I grew grapes for the Emperor. I poisoned his wine and got away with it.\"<br>\"Step right this way\"</mark></p>";
                echo '<form class="form-inline" action="tartarus.php" method="get">';
            echo '<input type="hidden" name="name" value="'.$name.'">';
            echo '<button type="submit" class="btn btn-default">Continue</button></form>';
            }
            elseif ($past==="treason"){
                echo "\"I grew grapes for the Emperor. I poisoned his wine and I was killed for treason becuase of it.\"<br>\"Step right this way\"</mark></p>";
                echo '<form class="form-inline" action="tartarus.php" method="get">';
            echo '<input type="hidden" name="name" value="'.$name.'">';
            echo '<button type="submit" class="btn btn-default">Continue</button></form>';
            }
            ?>
            <br>
        </div>
    </header>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
</body>
</html>