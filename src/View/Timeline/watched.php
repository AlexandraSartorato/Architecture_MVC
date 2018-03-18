<div class="container">
    <a class="align-right" href="/PiePHP/movies/watched/add"><i class="fas fa-plus-square"></i></a>
    <h5>Your Watched list</h5>
    <?php if(isset($film_details)): ?>
<table class="striped">
    <thead>
    <tr>
        <th>Title Movie</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($film_details as $key):?>
    <?php foreach ($key as $val):?>
            <tr><td><?php echo $val['titre'];?></td>
            </tr>
            <?php endforeach; ?>
            <?php endforeach;?>
    </tbody>
    <?php else:?>
        <p>Oops it seems that you need to add movies or log in.</p>
    <?php endif;?>
    </tbody>
</table>
</div>