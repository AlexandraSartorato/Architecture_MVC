<style>
    body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }

    main {
        flex: 1 0 auto;
    }

    body {
        background: #fff;
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
        color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
        border-bottom: 2px solid #e91e63;
        box-shadow: none;
    }
</style>
<div class="section"></div>
<main>
    <center>
        <div class="section"></div>
        <h5 class="blue-text">Please, login into your account</h5>
        <div class="section"></div>
        <div class="container">
            <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
                <form class="col s12" enctype="multipart/form-data" method="post" id="login">
                    <div class='row'>
                        <div class='col s12'>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='input-field col s12'>
                            <input class='validate' type='email' name='email' id='email' />
                            <label for='email'>Enter your email</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='input-field col s12'>
                            <input class='validate' type='password' name='mot_de_passe' id='mot_de_passe' />
                            <label for='password'>Enter your password</label>
                        </div>
                        <label style='float: right;'>
                            <a class='pink-text' href='#!'><b>Forgot Password?</b></a>
                        </label>
                    </div>
                    <br />
                    <center>
                        <div class='row'>
                            <button id="btn_login" type='submit' class='col s12 btn btn-large waves-effect'>Login</button>
                        </div>
                    </center>
                    <div class="preloader-wrapper big active" id="loading" style="display: none;">
                        <div class="spinner-layer spinner-blue-only">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div><div class="gap-patch">
                                <div class="circle"></div>
                            </div><div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div id="resultat">
                    </div>
                </form>
            </div>
        </div>
    </center>
    <div class="section"></div>
    <div class="section"></div>
</main>
<script type="text/javascript">
    $("#login").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/PiePHP/user/logAction',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('#btn_login').attr("disabled","disabled");
                $('#loading').css("display","block");
                $('#login').css("opacity",".5");
            },

            success: function(msg){
                $('#resultat').html('');

                if(msg == "ok"){
                    $('#login')[0].reset();
                    window.location="/PiePHP/user/profil";
                }else{
                    $('#resultat').html('<span style="font-size:18px;color:#EA4335">Some problem occurred, please try again.</span>');
                }
                $('#login').css("opacity","");
                $('#loading').css("display","none");
                $("#btn_login").removeAttr("disabled");
            }
        });
    });
</script>


