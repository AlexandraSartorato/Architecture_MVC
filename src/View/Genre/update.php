<h5 class="indigo-text">Add a new genre</h5>
<form class="col s6" method="post" action="./updateAction?id=<?php echo $details[0]['id_genre']; ?>">
    <div class='row'>
        <div class='col s12'>
        </div>
    </div>
    <div class='row'>
        <div class='input-field col s12'>
            <input class='validate' type='text' name='nom' id='name' placeholder="<?php echo $details[0]['nom'];?>"/>
            <label for='Genre'>Update the name genre</label>
        </div>
    </div>
    <br />
    <center>
        <div class='row'>
            <button type='submit'  class='col s4 btn btn-large waves-effect indigo center-align'>Update</button>
        </div>
    </center>
</form>