<div class="container">
<?php if(!empty($films)) :?>
    <h2>Results</h2>
     <p>We found <?php echo count($films ); ?> result/s !</p>
        <?php foreach ($films as $value): ?>
        <ul>
            <li><h4><a href="./details?id=<?php echo htmlspecialchars($value['id_film']);?>"><?php echo htmlspecialchars($value['titre']);?></a></h4></li>
            <li><?php echo htmlspecialchars($value['resum']);?></li>
            <li><?php echo htmlspecialchars($value['annee_prod']);?></li>
        </ul>
        <?php endforeach;?>
        <?php else: ?>
            <p>Movies not found !</p>
        <?php endif;?>
</div>
