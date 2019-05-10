<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>zZombie</title>
    <meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
    <meta name="author" content="www.zerotheme.com">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="css/zerogrid.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/component.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
    <![endif]-->

    <link href='./images/favicon.ico' rel='icon' type='image/x-icon'/>

</head>
<body>
<div class="wrap-body">

    <!--////////////////////////////////////Header-->
    <header>
        <div class="top-header">
            <div class="wrap-top zerogrid">
                <nav>
                    <a class="toggleMenu" href="#">Menu</a>
                    <ul class="menu">
                        <li><a href="/index">Home</a></li>
                        <li>
                            <a href="#" class="parent">Categories</a>
                            <ul>
                                <li><a href="#">Menu 1001</a></li>
                                <li><a href="#">Menu 1002</a></li>
                                <li><a href="#" class="parent">Menu 1003</a>
                                    <ul>
                                        <li><a href="#">Menu 3001</a></li>
                                        <li><a href="#">Menu 3002</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="/single">Blog</a></li>
                        <li><a href="/single">About</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                        <li><a href="/login">login/register</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="wrap-header">
            <div class="zerogrid">
                <div id="logo"><a href="index.html"><img src="./images/logo.png"/></a></div>
                <div class="header-social">
                    <a href="#"><img src="images/facebook.png" title="facebook"/></a>
                    <a href="#"><img src="images/twitter.png" title="twitter"/></a>
                    <a href="#"><img src="images/google.png" title="google"/></a>
                    <a href="#"><img src="images/pinterest.png" title="pinterest"/></a>
                    <a href="#"><img src="images/instagram.png" title="instagram"/></a>
                </div>
                <div class="header-search">
                    <center><form method="get" action="/search" id="search">
                            <input name="q" type="text" size="40" placeholder="Type key to search" />
                        </form></center>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/navigation.js"></script>
</body>
</html>