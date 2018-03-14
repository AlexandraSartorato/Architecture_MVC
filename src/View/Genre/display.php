<div class="container">
<div class="row">
    <div class="col s5">
<table class="striped">
                    <thead>
                        <th>Genre</th>
                        <th>Rename genre</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                    <?php $result = array_filter($genres);?>
                    <? foreach ($result as $item=>$value):?>
                    <tr>
                        <td><?php echo htmlspecialchars($value['nom']);?></td>
                        <input type="hidden" value="<?php echo htmlspecialchars($value['id_genre']);?>" id="genre">
                        <td></i><a href="./update?id=<?php echo htmlspecialchars($value['id_genre']);?>"><i class="fas fa-wrench"></i></a></td>
                        <td></i><a href="./delete?id=<?php echo htmlspecialchars($value['id_genre']);?>"><i class="fas fa-minus-square"></i></a></td>
                    </tr>
                    <?php endforeach;?>
                    </tbody>
</table>
</div>
    <h5 class="indigo-text">Add a new genre</h5>
    <form class="col s6" method="post" action="./add">
        <div class='row'>
            <div class='col s12'>
            </div>
        </div>
        <div class='row'>
            <div class='input-field col s12'>
                <input class='validate' type='text' name='nom' id='genre' />
                <label for='Genre'>Enter a name genre</label>
            </div>
        </div>
        <br />
        <center>
            <div class='row'>
                <button type='submit'  class='col s4 btn btn-large waves-effect indigo center-align'>Add</button>
            </div>
        </center>
    </form>
</div>
</div>