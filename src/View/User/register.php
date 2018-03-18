<div class="container">
    <div class="progress" id="loading" style="display: none;">
        <div class="indeterminate"></div>
    </div>
    <div class="row">
        <h4 class="form-signin-heading">Welcome, to MyCinem@community!</h4>
            <p>Please fullfill all the information</p>
            <form class="form-signin" method="post" id="register">
            <div class="input-field col s6">
                <input type="text" id="first_name"  placeholder="Firstname" name ="prenom">
            </div>
            <div class="input-field col s4">
                <input type="text" id="last_name"  placeholder="Lastname" name ="nom">
            </div>
            <div class="input-field col s10">
                <input type="text" id="City"  placeholder="City" name ="ville">
                <input type="date" class="datepicker" name="date_naissance" placeholder="Birthdate">
                 <input type="email" class="form-control" name="email" placeholder="E-mail Adress" id="email" required/>
            </div>
            <br>
    <div class="input-field col s10">
        <input type="password" class="form-control" id="password" name="mot_de_passe" placeholder="Password" required=""/>
        <div class="center-align">
            <button class="btn waves-effect waves-light" id="btn_submit" type="submit">Join us<i class="material-icons right"></i></button>
        </div>
    </div>
            </form>
        <div id="resultat">
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#register").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/PiePHP/user/registerAction',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('#btn_login').attr("disabled","disabled");
                $('#loading').css("display","block");
                $('#register').css("opacity",".5");
            },

            success: function(msg){
                $('#resultat').html('');
                if(msg == "ok"){
                    window.location="/PiePHP/user/profil";
                }else{
                    $('#resultat').html('<span style="font-size:18px;color:#EA4335">Make sure there is no mistake, please try again.</span>');
                }
                $('#register').css("opacity","");
                $('#loading').css("display","none");
                $("#btn_submit").removeAttr("disabled");
            }
        });
    });
</script>