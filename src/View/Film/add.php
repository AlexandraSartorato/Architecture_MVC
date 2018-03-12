<form class="form-signin" method="post" action="./addAction">
    <h2 class="form-signin-heading">Add a new movie in the database</h2>
    <div class="input-group">
        <input type="text" id="title"  placeholder="Title Movie" name ="titre">
        <input type="text" id="last_name"  placeholder="Plot" name ="resum">
        <label>Date of release</label> <input type="date" class="datepicker" name="date_debut_affiche">
        <label>End of release</label><input type="date" class="datepicker" name="date_fin_affiche">
        <input type="text" name="duree_min" placeholder="Duration of movie">
        <input type="text" name="annee_prod" placeholder="Year of production">
        <span class="input-group-addon"><i class="fa fa-user-o fa-fw" aria-hidden="true"></i></span>
    </div>
    <br>
    <button class="btn waves-effect waves-light" type="submit">Add movie<i class="material-icons right"></i>
    </button>
</form>