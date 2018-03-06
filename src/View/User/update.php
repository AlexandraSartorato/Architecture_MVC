<form class="form-signin" method="post" action="http://localhost:8888/PiePHP/user/updateAction">
    <h2 class="form-signin-heading">Modify Profil</h2>
    <div class="input-group">
        <input type="text" id="first_name"  placeholder="Fi" name ="prenom">
        <input type="text" id="last_name"  placeholder="Lastname" name ="nom">
        <input type="text" id="City"  placeholder="City" name ="ville">
        <input type="date" class="datepicker" name="date_naissance" placeholder="Birthdate">
        <span class="input-group-addon"><i class="fa fa-user-o fa-fw" aria-hidden="true"></i></span>
        <input type="text" class="form-control" name="email" placeholder="E-mail Adress" id="email" required="" autofocus="" />
    </div>
    <br>
    <div class="input-group">
        <input type="password" class="form-control" id="password" name="mot_de_passe" placeholder="Password" required=""/>
    </div>
    <button class="btn waves-effect waves-light" type="submit">Sign up<i class="material-icons right"></i>
    </button>
</form>