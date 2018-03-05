<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" /> <meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

<title>Pie PHP</title>
</head>
<body>
<nav>
    <div class="nav-wrapper light-blue darken-4">
        <a href="#!" class="brand-logo">My Cinema</a>
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
<p>La view qui s'affiche</p>
<?= $view ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

</body>
</html>
