<div class="container">
<form class="form-signin" method="post" action="./addAction">
    <h2 class="form-signin-heading">Add a new movie in the database</h2>
    <div class="input-group">
        <input type="text" id="title"  placeholder="Title Movie" name ="titre">
        <input type="text" id="last_name"  placeholder="Plot" name ="resum">
        <select name="id_genre">
            <label>Selected Movie</label>
            <option value="id_genre">Choose your genre</option>
            <?php foreach ($genre_list as $value) :?>
                <option value="<?php echo htmlspecialchars($value['id_genre']);?>"><?php echo htmlspecialchars($value['nom']);?></option>
            <?endforeach;?>
        </select>
            <input type="text" name="duree_min" placeholder="Duration of movie">
            <input type="text" name="annee_prod" placeholder="Year of production">
            <span class="input-group-addon"><i class="fa fa-user-o fa-fw" aria-hidden="true"></i></span>
    </div>
    <br>
    <button class="btn waves-effect waves-light" type="submit">Add movie<i class="material-icons right"></i>
    </button>
</form>
</div>
<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>