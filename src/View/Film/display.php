<div class="row">
    <?php $result = array_filter($films);?>
            <div class="col l6">
                <table class="striped">
                    <thead>
                    <th>Title</th>
                    <th>Plot</th>
                    <th>Time</th>
                    <th>Details</th>
                    </thead>
                    <tbody>
                        <? foreach ($result as $item=>$value):?>
                        <tr><td><?php echo htmlspecialchars($value['titre']);?></td>
                            <td><?php echo htmlspecialchars($value['resum']);?></td>
                            <td><?php echo htmlspecialchars($value['duree_min']);?></td>
                            <td><i class="fas fa-info-circle"></i><a href="#">More info</a></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
    </div>
    <div class="col s6">
        <h3>Top 5 popular in 2017</h3>
        <div id="images">
        </div>
    </div>
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
                    console.log(results.id);
                    $( "<img>" ).attr( "src", 'https://image.tmdb.org/t/p/w200/'+ results.poster_path).appendTo( "#images" );
                    if ( i === 3 ) {
                        return false;
                    }
                });
            });
    })();

   /* var app = angular.module('myApp', []);
    app.controller('list', function($scope, $http) {

        $http.get("https://api.themoviedb.org/3/movie/popular?api_key=d25dcd0e636e9e64c47928af530beffb").then(function(response) {
            $scope.genre= response.data;
            console.log(response.data);
        });
    });*/
</script>