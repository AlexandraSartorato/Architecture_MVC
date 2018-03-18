<div class="row">
</div>
<div class="container">
    <div class="row">
        <div class="col l6">
            <ul>
                <?php foreach ($details as $item=>$value):?>
                <li><h5><?php echo htmlspecialchars($value['titre']);?></h5></li>
                <li id="original_title"></li>
                <li><h5><?php echo htmlspecialchars($value['annee_prod']);?></h5></li>
                <li class="cyan-text lighten-3"><h6><?php echo htmlspecialchars($genre_details[0]['nom']);?></h6></li>
                    <input type="hidden" value="<?php echo htmlspecialchars($value['titre']);?>" id="title">
                <li><?php echo htmlspecialchars($value['resum']);?></li>
                <li>Duration: <?php echo htmlspecialchars($value['duree_min']);?> minutes</li>
                <li id="rate"></li>
                <li id="vote"></li>
                <li><a class="waves-effect waves-light btn" href="./update?id=<?php echo htmlspecialchars($value['id_film']); ?>" >Modify information</a></li>
        <?php endforeach;?>
        </ul>
        </div>
        <div id="result">
        </div>
    </div>
</div>
<script>
(function() {
    var title=$('#title').val();
    var API = "https://api.themoviedb.org/3/search/movie?include_adult=false&page=1&language=en-US&api_key=d25dcd0e636e9e64c47928af530beffb&query="+title;
    $.getJSON(API)
    .done(function( data ) {
    $( "<img>" ).attr( "src",'https://image.tmdb.org/t/p/w300/'+ data.results[0].poster_path).appendTo("#result");
        $( "#rate" ).html( "<span><i class='fas fa-star'></i> "+ data.results[0].vote_average +"</span>" );
        $( "#original_title" ).html( "<p class='grey-text lighten-1'>Original Title: "+ data.results[0].original_title +"</p>" );
        $( "#vote" ).html( "<p class='grey-text lighten-1'>Vote count: "+ data.results[0].vote_count +"</p>" );

    });
})();
</script>