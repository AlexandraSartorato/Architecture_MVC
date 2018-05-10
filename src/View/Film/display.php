<div class="row"></div>
<a class="waves-effect waves-light btn right-align" href="./add">Add a new movie</a>
<a class="waves-effect waves-light btn right-align" href="/PiePHP/genre/display">Explore genres available</a>
<div class="row">
    <div class="col l6">
        <table class="striped">
            <thead>
                <th>Title</th>
                <th>Details</th>
                <th>Delete</th>
            </thead>
            <tbody>
                <?php $result = array_filter($films);?>
                <? foreach ($result as $item=>$value):?>
                <tr>
                    <td><?php echo htmlspecialchars($value['titre']);?></td>
                    <input type="hidden" value="<?php echo htmlspecialchars($value['titre']);?>" id="title">
                    <td><i class="fas fa-info-circle"></i><a href="./details?id=<?php echo htmlspecialchars($value['id_film']);?>">More info</a></td>
                    <td><a href="./delete?id=<?php echo htmlspecialchars($value['id_film']);?>"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<div class="col s6">
</div>
<div class="col s6" id="records">
    <h3>Top 5 popular movies</h3>
</div>
</div>
<script>
(function() {
    var API = "https://api.themoviedb.org/3/movie/popular?api_key=d25dcd0e636e9e64c47928af530beffb";
    $.getJSON(API)
    .done(function( data ) {
        console.log(data);
        $.each( data.results, function( i, results ) {
            $("#records").append('<div class="card-horizontal"></div>');
            $( "<img>" ).attr( "src", 'https://image.tmdb.org/t/p/w200/'+ results.poster_path).appendTo( ".card-horizontal" );
            $( ".card-horizontal" ).append( '<p>'+results.title+'</p>' );

            if ( i === 3 ) {
                return false;
            }
        });
    });
})();
</script>
