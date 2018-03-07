<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" /> <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.js"integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <title>Pie PHP</title>
</head>
<body>
<nav>
    <div class="nav-wrapper light-blue darken-4">
        <a href="#!" class="brand-logo">My cinema</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Movies</a></li>
            <li><a href="badges.html">History</a></li>
            <li><a class="waves-effect waves-light btn">Sign in</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="sass.html">Movies</a></li>
            <li><a href="badges.html">History</a></li>
        </ul>
    </div>
</nav>
<nav>
    <div class="nav-wrapper white">
        <form>
            <div class="input-field">
                <input id="search" type="search" required>
                <label class="label-icon" for="search"><i class="fas fa-search fa-2x"></i></label>
                <i class="material-icons">close</i>
            </div>
        </form>
    </div>
</nav>
<?= $view ?>
</body>
<footer class="page-footer light-blue darken-4">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Join the community</h5>
                <p class="grey-text text-lighten-4">Great database's movies.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">My Movies</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">History</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">About us</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Connect</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2017 alexandra.sartorato@epitech.eu
            <a class="grey-text text-lighten-4 right" href="#!"><i class="fab fa-facebook-square fa-2x"></i></a>
            <a class="grey-text text-lighten-4 right" href="#!"><i class="fab fa-instagram fa-2x"></i></a>
            <a class="grey-text text-lighten-4 right" href="#!"><i class="fab fa-twitter-square fa-2x"></i></a>
        </div>
    </div>
</footer>
</html>
