<div class="container">
<div class="row">
    <div class="col s5">
<form class="form-signin" method="post" action="./updateAction?id=<?php echo htmlspecialchars($details[0]['id_film']);?>">
    <h2 class="form-signin-heading">Update the database</h2>
    <div class="input-group">
        <input type="text" id="title"  placeholder="<?php echo htmlspecialchars($details[0]['titre']); ?>" name ="titre">
        <div class="input-field col s12">
            <textarea id="textarea1" class="materialize-textarea" name="resum"></textarea>
            <label for="textarea1">Plot of the movie</label>
        </div>
        <label>Year of release</label> <input type="date" class="datepicker" name="annee_prod">
        <input type="text" name="duree_min" placeholder="Duration of movie">
        <input type="text" name="annee_prod" placeholder="Year of production">
        <span class="input-group-addon"><i class="fa fa-user-o fa-fw" aria-hidden="true"></i></span>
    </div>
    <br>
    <button class="btn waves-effect waves-light" type="submit">Update<i class="material-icons right"></i></button>
    </div>
</div>
</div>
</form>