<div class="container">
<form class="form-signin" method="post" id="update">
    <?php if(isset($info)) : ?>
    <h2 class="form-signin-heading">Modify Profil</h2>
    <div class="input-group">
        <label for="Lastname"></label><input type="text" id="first_name"  placeholder="<?php echo htmlspecialchars($info[0]['prenom']);?>" name ="prenom">
        <label for="Name"></label><input type="text" id="last_name"  placeholder="<?php echo htmlspecialchars($info[0]['nom']); ?>" name ="nom">
        <label for="City"></label><input type="text" id="City"  placeholder="<?php echo htmlspecialchars($info[0]['ville']); ?>" name ="ville">
        <label for="Birthdate"></label><input type="date" class="datepicker" name="date_naissance" placeholder="<?php echo htmlspecialchars($info[0]['date_naissance']); ?>">
        <span class="input-group-addon"><i class="fa fa-user-o fa-fw" aria-hidden="true"></i></span>
        <label for="Email"></label><input type="text" class="form-control" name="email" placeholder="<?php echo htmlspecialchars($info[0]['email']); ?>" id="email" required="" autofocus="" />
    </div>
    <br>
    <button id="modify" class="btn waves-effect waves-light" onclick="Materialize.toast('Updated', 4000)" type="submit">Modify<i class="material-icons right"></i></button>
    <div class="resultat">
    </div>
</form>
    <?php else: ?>
        <p>Oops, it seems that you need to log in</p>
    <?php endif; ?>
</div>
<script>
    $("#update").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/PiePHP/user/updateAction',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('#modify').attr("disabled","disabled");
                $('#update').css("opacity",".5");
            },

            success: function(msg){
                $('#resultat').html('');
                if(msg == "ok"){
                    $('#update')[0].reset();
                    $('#resultat').html('<span style="font-size:18px;color:#EA4335">Your profil is updated.</span>');
                }else{
                    $('#resultat').html('<span style="font-size:18px;color:#EA4335">Some problem occurred, please try again.</span>');
                }

            }
        });
    });
</script>
