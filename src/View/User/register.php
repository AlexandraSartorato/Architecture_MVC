<div class="container">
    <div class="row">
        <h4 class="form-signin-heading">Welcome, to MyCinem@community!</h4>
        <p>Please fullfill all the information</p>
        <form class="form-signin" method="post" action="http://localhost:8888/PiePHP/user/registerAction">
            <div class="input-field col s6">
        <input type="text" id="first_name"  placeholder="Firstname" name ="prenom">
            </div>
            <div class="input-field col s4">
        <input type="text" id="last_name"  placeholder="Lastname" name ="nom">
            </div>
            <div class="input-field col s10">
        <input type="text" id="City"  placeholder="City" name ="ville">
        <input type="date" class="datepicker" name="date_naissance" placeholder="Birthdate">
        <input type="text" class="form-control" name="email" placeholder="E-mail Adress" id="email"/>
        </div>
            <br>
    <div class="input-field col s10">
        <input type="password" class="form-control" id="password" name="mot_de_passe" placeholder="Password" required=""/>
    <div class="center-align">
        <button class="btn waves-effect waves-light" type="submit">Join us<i class="material-icons right"></i></button>
    </div>
    </div>
</form>
</div>
</div>