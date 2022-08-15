       
<html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Emna Fetni</title>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx' crossorigin='anonymous'>
            <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa' crossorigin='anonymous'></script>
            <link rel='stylesheet' href='moviemore.css' type='text/css'>
            <script src='jquery.js'></script>
        </head>
<?php
    include("connexion.inc.php"); 
    $req="SELECT m.idmovies ,m.title , m.descmovie , m.genre, m.year, m.duration, f.postersrc , f.realisation , f.scenario , f.castingprincipal
    FROM movies m , fichemovies f where ( f.idmovies='".$_GET["id"]."') and (f.idmovies=m.idmovies)";
    $res=mysqli_query($conn,$req); 
    if($res) {
        echo "
        <body>
            <section class='movie-more' id='moviemore'>
                    <div class='nav'>
                        <a href='index.php#myworkssection'><button id='hidebutton' class='hide-button'></Button></a>
                        
                    </div>
                    <div class='movie-content'>"
                    ; 
        while( ($row=mysqli_fetch_array($res)) != null) {
           echo "
           <div class='award-container'>
           <div class='award-zone'>
           <img src='award.png' class='awardpic'>
           <p class='award-list'>Award . Award . Award<p>
           </div>
           </div>
           <div class='text-poster-zone'>
             <div class='text-zone'>
                <h1>".$row[1]."</h1>
                <p>".$row[3]."  |  ".$row[4]."  |  ".$row[5]."
                <h3>Description</h3>
                <p>".$row[2]."</p>
                <p><button type='button' class='btn btn-primary btn-lg'><img src='play.png'>  Watch now  </button></p>
                <ul class='list-group'>
                    <li class='list-group-item'><span class='bold'>Director  : </span> ".$row[7]."</li>
                    <li class='list-group-item'><span class='bold'>Writer  :</span> ".$row[8]."</li>
                    <li class='list-group-item'><span class='bold'>Main cast  : </span> ".$row[9]."</li>
                </ul>
             </div
             <div class='poster-zone'><img class='poster'  src='".$row[6]."' alt=''></div>
           </div>
           "; 
        }
        echo "</div>
        <h2>Images</h2>
        <div class='carousel-container'>
                <div id='carouselExampleControls' class='carousel slide' data-bs-ride='carousel'>
                        <div class='carousel-inner'>
                            <div class='carousel-item active'>
                            <img src='1.jpg' class='d-block w-100' alt='...'>
                            </div>
                            <div class='carousel-item'>
                            <img src='2.jpg' class='d-block w-100' alt='...'>
                            </div>
                            <div class='carousel-item'>
                            <img src='4.jpg' class='d-block w-100' alt='...'>
                            </div>
                        </div>
                        <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleControls' data-bs-slide='prev'>
                            <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                            <span class='visually-hidden'>Previous</span>
                        </button>
                        <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleControls' data-bs-slide='next'>
                            <span class='carousel-control-next-icon' aria-hidden='true'></span>
                            <span class='visually-hidden'>Next</span>
                        </button>
                </div>
            </div> 
        </section>
</body>  "      
; 
    }
    else {
        echo"error"; 
    }
?>
