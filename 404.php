<!doctype html>
<html lang="uk">
<head>
    <!-- META -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Bulbona</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/404.css">
</head>
<body>
    <div class="main-wrapper">
        <header class="container-fluid header">
            <!-- BEGIN: top-menu -->
            <nav class="navbar-custom navbar navbar-fixed-top navbar-light">
                <div class="container">
                    <div class="row">
                        <div class="collapse" id="collapsingNavbar">
                            <div class="bg-inverse p-a-1">
                                <h4>Collapsed content</h4>
                                <span class="text-muted">Toggleable via the navbar brand.</span>
                            </div>
                        </div>
                        <button class="navbar-toggler hidden-sm-up" data-toggle="collapse" data-target="#collapsingNavbar">
                            &#9776;
                        </button>
                        <div class="collapse navbar-toggleable-xs">
                            <img class="navbar-brand" src="images/main-logo.png">
                            <ul class="nav navbar-nav">
                                <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                                <li class="nav-item"><a class="reservation nav-link" href="#">Reservation</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- END: top-menu -->
        </header>

        <!-- BEGIN: content -->
        <div class="container-fluid content gray-block">
            <!-- BEGIN: 404-page -->
            <div class="container page-404">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/flat-desktop.png" class="img-fluid" alt="no-image">
                    </div>

                    <div class="col-md-6">
                        <h1>404 Error</h1>
                        <h2>Sorry, you broke the internet</h2>
                        <p>The page you are trying to reach does not exist, or has been moved. Please use the menus or the search box to find what you are looking for. Perhaps searching can help.</p>
                        <a href="#" class="button">Back home</a>
                    </div>
                </div>
            </div>
            <!-- END: 404-page -->
        </div>
        <!-- END: content -->

        <footer class="footer">
            <!-- BEGIN: footer-information -->
            <div class="container footer-information">
                <div class="row">
                    <div class="col-md-3">
                        <h3>EDENA by Little Neko</h3>
                        <p>Little Neko is a web design and development studio. We build responsive HTML5 and CSS3 templates, integrating best web design practises and up-to-date web technologies to create great user experiences.</p>
                        <p class="font-weight-bold">We love what we do!</p>
                    </div>
                    <div class="col-md-3">
                        <h3>Tag cloud</h3>
                        <p>Some clouds</p>
                    </div>
                    <div class="col-md-3">
                        <h3>Contact infos</h3>
                        <p class="font-weight-bold">Little Neko</p>
                        <p>131 clean street 95060 Santa Cruz CA</p>
                        <p>(831)-555-5555</p>
                        <p>(831)-555-5556</p>
                        <a href="mailto:little-blog@little-neko.com">little-blog@little-neko.com</a>
                    </div>
                    <div class="col-md-3">
                        <h3>Newsletter</h3>
                        <form action="">
                            <input type="email" name="email" placeholder="Your email adress">
                            <input type="submit" class="button" value="Sign in">
                        </form>
                    </div>
                </div>
            </div>
            <!-- END: footer-information -->

            <!-- BEGIN: copyright -->
            <div class="container-fluid copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Copyright © 2015 Little NEKO / All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: copyright -->
        </footer>
    </div>

    <!-- JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>