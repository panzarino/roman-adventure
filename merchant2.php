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
    <header id="top" class="header" style="background: url(img/merchant.jpg) no-repeat center center scroll;-webkit-background-size: cover;-moz-background-size: cover;background-size: cover;-o-background-size: cover;">
        <div class="text-vertical-center">
            <img src="img/vase.png" height="100px" width="100px"><br><br>
            <?php
            $name = $_GET['name'];
            $ship = $_GET['ship'];
            $trips = $_GET['trips'];
            $trips = intval($trips);
            $nexttrip = $trips+1;
            $chances = rand(1,3);
            switch($chances){
                case 1:
                    $odds="high";
                    break;
                case 2:
                    $odds="medium";
                    break;
                case 3:
                    $odds="low";
                    break;
            }
            if ($trips!=5 && $trips!=10){
            echo "<p style='font-size:20px'><mark>You are ready to take ".$ship." out for a run, but you have to be careful of pirates. The chances of meeting pirates today is ".$odds.".<br><br>Do you want to sail today?</mark></p>";
            echo '<form class="form-inline" action="merchantsail.php" method="get">';
            echo '<input type="hidden" name="name" value="'.$name.'">';
            echo '<input type="hidden" name="ship" value="'.$ship.'">';
            echo '<input type="hidden" name="odds" value="'.$odds.'">';
            echo '<input type="hidden" name="trips" value="'.$nexttrip.'">';
            echo '<button type="submit" class="btn btn-default">Yes</button></form><br>';
            echo '<form class="form-inline" action="merchant2.php" method="get">';
            echo '<input type="hidden" name="name" value="'.$name.'">';
            echo '<input type="hidden" name="ship" value="'.$ship.'">';
            echo '<input type="hidden" name="trips" value="'.$trips.'">';
            echo '<button type="submit" class="btn btn-default">No (Try again later)</button></form><br>';
            echo '<form class="form-inline" action="merchant2.php" method="get">';
            echo '<input type="hidden" name="name" value="'.$name.'">';
            echo '<input type="hidden" name="trips" value="10">';
            echo '<button type="submit" class="btn btn-default">No (I don\'t want to sail again)</button></form><br>';
            }
            elseif ($trips===5){
                echo "<p style='font-size:20px'><mark>You have been sailing for quite some time now.<br><br>Do you want to settle down as a farmer or continue to sail?</mark></p>";
                echo '<form class="form-inline" action="farmer.php" method="get">';
                echo '<input type="hidden" name="past" value="merchant">';
            echo '<input type="hidden" name="name" value="'.$name.'">';
            echo '<button type="submit" class="btn btn-default">Become a Farmer</button></form><br>';
            echo '<form class="form-inline" action="merchant2.php" method="get">';
            echo '<input type="hidden" name="name" value="'.$name.'">';
            echo '<input type="hidden" name="ship" value="'.$ship.'">';
            echo '<button type="submit" class="btn btn-default">Keep Sailing</button></form><br>';
            }
            elseif ($trips===10){
                echo "<p style='font-size:20px'><mark>You have been sailing for quite some time now.<br>You decide to settle down as a farmer.</mark></p>";
                echo '<form class="form-inline" action="farmer.php" method="get">';
                echo '<input type="hidden" name="past" value="merchant">';
            echo '<input type="hidden" name="name" value="'.$name.'">';
            echo '<button type="submit" class="btn btn-default">Continue</button></form><br>';
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