<div class="container">
<form class="form-signin" method="post" action="./addAction">
    <h2 class="form-signin-heading">Add a new movie in your wacthed list</h2>
    <select name="id_film">
        <label>Selected Movie</label>
        <option value="id_film">Choose your movie</option>
            <?php foreach ($film_info as $value) :?>
            <option value="<?php echo htmlspecialchars($value['id_film']);?>"><?php echo htmlspecialchars($value['titre']);?></option>
        <?endforeach;?>
    </select>
        <label>Date of watching </label>
    <input type="date" class="datepicker" name="date">
    <input type="hidden" value="<?php echo $_SESSION['id'];?>" name="id_timeline">
        <span class="input-group-addon"><i class="fa fa-user-o fa-fw" aria-hidden="true"></i></span>
    <button class="btn waves-effect waves-light" type="submit">Add movie<i class="material-icons right"></i>
    </button>
</form>
</div>
<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>