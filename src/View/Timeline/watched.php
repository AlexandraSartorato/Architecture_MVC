<div class="container">
    <a class="align-right" href="#"><i class="fas fa-plus-square"></i></a>
    <h5>Your Watched list</h5>
<table class="striped">
    <thead>
    <tr>
        <th>Title Movie</th>
        <th>Date</th>
        <th>Review</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($film_details as $key):?>
    <?php foreach ($key as $val):?>
            <tr><td><?php echo $val['titre'];?></td></tr>
        <?php endforeach; ?>
            <?php endforeach;?>
    <?php foreach($details as $values):?>
        <td><?php echo $values['date'];?></td>
        <td><?php echo $values['avis'];?></td>
    </tr>
        <?php endforeach; ?>


    </tbody>
</table>
</div>