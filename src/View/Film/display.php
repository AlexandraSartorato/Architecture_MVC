<div class="row">
    <?php $result = array_filter($films);?>
            <div class="col s5">
                <table class="striped">
                    <thead>
                    <th>Title</th>
                    <th>Synopsis</th>
                    <th>Time</th>
                    </thead>
                    <tbody>
                        <? foreach ($result as $item=>$value):?>
                        <tr><td><?php echo $value['titre'];?></td>
                            <td><?php echo $value['resum'];?></td>
                            <td><?php echo $value['duree_min'];?></td>
                        </tr>
                        <?php endforeach;?>

                    </tbody>
                </table>

    </div>
</div>