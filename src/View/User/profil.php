<div class="col s12 m7">
    <?php if(!empty($info)): ?>
    <h2 class="header">User Profil</h2>
    <div class="card horizontal">
        <div class="card-image">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6JnoPQC_Zx7CYXN-fqw_JJE6ifDewQjNd6KZHArqZuHTvYdaK">
        </div>
        <div class="card-stacked">
            <div class="card-content">
                <p>Firstname: <?php echo htmlspecialchars($info[0]['nom'])?></p>
                <p>Lastname: <?php echo htmlspecialchars($info[0]['prenom'])?></p>
                <p>Email: <?php echo htmlspecialchars($info[0]['email'])?></p>
                <p>Ville: <?php echo htmlspecialchars($info[0]['ville'])?></p>
                <p>Date de naissance: <?php echo htmlspecialchars($info[0]['date_naissance'])?></p>
            </div>
            <div class="card-action">
                <a class="waves-effect waves-light btn modal-trigger" href="/PiePHP/user/update">Modifier profil</a>
                <a class="waves-effect waves-light btn modal-trigger" href="/PiePHP/user/delete">Supprimer profil</a>
            </div>
        </div>
        <?php else:?>
            <div class="container" style="height: 100%;">
            <p class="teal-text lighten-2-text">Oops, it seems that you have to log in !</p>
            </div>
        <?php endif; ?>
    </div>
</div>