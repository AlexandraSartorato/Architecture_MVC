<!DOCTYPE html>
<html lang="fr">
<head>
    <title>My Meetic</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <form class="form-signin" method="post" action="../../../index.php">
       <h2 class="form-signin-heading">Se connecter</h2>
        <div class="input-group">
           <span class="input-group-addon"><i class="fa fa-user-o fa-fw" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="email" placeholder="Adresse e-mail" id="email" required="" autofocus="" />
            </div>
                <br>
        <div class="input-group">
            <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required=""/>
        </div>
            <button class="btn btn-lg btn-outline-success btn-block" type="submit" id="submit">Connecter</button>
   </form>
</body>
</html>
