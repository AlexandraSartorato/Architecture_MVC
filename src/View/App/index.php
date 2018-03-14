<div class="parallax-container">
    <div class="parallax">
        <img src="https://cdn1.thr.com/sites/default/files/imagecache/scale_crop_768_433/2017/06/fut_wot_keyart-h_2017.jpg"></div>
    <div class="center-align" style="padding-top: 400px;">
        <a class="waves-effect waves-light btn" href="./user/register">Sign up</a>
    </div>
</div>
<div class="section white">
    <div class="row container">
        <div class="col s4">
            <h4 class="grey-text text-darken-3 lighten-3 center-align">Update information</h4>
            <p class="grey-text text-darken-3 lighten-3 center-align"><i class="fas fa-wrench fa-2x"></i></p>
            <p class="grey-text text-darken-3 lighten-3 center-align">As a member of this community you have the possibily to update the informations</p>
        </div>
        <div class="col s4">
            <h4 class="grey-text text-darken-3 lighten-3 center-align">Community share</h4>
            <p class="grey-text text-darken-3 lighten-3 center-align"><i class="fas fa-share-alt fa-2x"></i></p>
            <p class="grey-text text-darken-3 lighten-3 center-align">With this community, you can share what you watched and  easely find your favorites movies.</p>
        </div>
        <div class="col s4">
            <h4 class="grey-text text-darken-3 lighten-3 center-align">My Movies</h4>
            <p class="grey-text text-darken-3 lighten-3 center-align"><i class="fas fa-film fa-2x"></i></p>
            <p class="grey-text text-darken-3 lighten-3 center-align">Sharing community movies</p>
        </div>
    </div>
</div>
<div class="row">

    <div class="container" id="popular">
        <h4>Upcomming Movies</h4>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.parallax').parallax();
        var API = "https://api.themoviedb.org/3/movie/upcoming?api_key=d25dcd0e636e9e64c47928af530beffb";
        $.getJSON(API)
            .done(function( data ) {
                console.log(data);
                $.each( data.results, function( i, results ) {
                    $( "<img>" ).attr( "src", 'https://image.tmdb.org/t/p/w200/'+ results.poster_path).appendTo( "#popular" ).addClass('pictures');

                    if ( i === 3 ) {
                        return false;
                    }
                });
            });
    });
</script>
