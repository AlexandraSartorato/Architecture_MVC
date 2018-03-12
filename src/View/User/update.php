<form class="form-signin" method="post" action="http://localhost:8888/PiePHP/user/updateAction">
    <h2 class="form-signin-heading">Modify Profil</h2>
    <div class="input-group">
        <label for="Lastname"></label><input type="text" id="first_name"  placeholder="<?php echo $info[0]['prenom'];?>" name ="prenom">
        <label for="Name"></label><input type="text" id="last_name"  placeholder="<?php echo $info[0]['nom']; ?>" name ="nom">
        <label for="City"></label><input type="text" id="City"  placeholder="<?php echo $info[0]['ville']; ?>" name ="ville">
        <label for="Birthdate"></label><input type="date" class="datepicker" name="date_naissance" placeholder="<?php echo $info[0]['date_naissance']; ?>">
        <span class="input-group-addon"><i class="fa fa-user-o fa-fw" aria-hidden="true"></i></span>
        <label for="Email"></label><input type="text" class="form-control" name="email" placeholder="<?php echo $info[0]['email']; ?>" id="email" required="" autofocus="" />
    </div>
    <br>
    <div class="input-group">
        <label for="Password"></label><input type="password" class="form-control" id="password" name="mot_de_passe" placeholder="******" required=""/>
    </div>
    <button class="btn waves-effect waves-light" type="submit">Sign up<i class="material-icons right"></i>
    </button>
</form>