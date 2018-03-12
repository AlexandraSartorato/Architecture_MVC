<a class="waves-effect waves-light btn" href="./add">Add a new movie</a>
<div class="row">
    <?php $result = array_filter($films);?>
            <div class="col l6">
                <table class="striped">
                    <thead>
                    <th>Title</th>
                    <th>Details</th>
                    </thead>
                    <tbody>
                        <? foreach ($result as $item=>$value):?>
                        <tr><td><?php echo htmlspecialchars($value['titre']);?></td>
                            <input type="hidden" value="<?php echo htmlspecialchars($value['titre']);?>" id="title">
                            <td><i class="fas fa-info-circle"></i><a href="./details?id=<?php echo htmlspecialchars($value['id_film']);?>">More info</a></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
    </div>
    <div class="col s6" id="records">
    </div>
<ul class="pagination">
    <li class="disabled"><a href="#!"><i class="fas fa-chevron-circle-left"></i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="fas fa-chevron-circle-right"></i></a></li>
</ul>
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
        /*var title = $('#title').val();
        var App = "https://api.themoviedb.org/3/search/movie?include_adult=false&page=1&language=fr-FR&api_key=d25dcd0e636e9e64c47928af530beffb&query=" + title;
        $.getJSON(App)
            .done(function (data) {
                console.log(data);
                $.each(data.results, function (i, results) {
                    console.log(data.results);
                    $("<img>").attr("src", 'https://image.tmdb.org/t/p/w200/' + data.results.poster_path).appendTo(".poster");
                });
            });*/
    })();
</script>