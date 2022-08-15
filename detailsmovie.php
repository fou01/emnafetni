<?php
    include("connexion.inc.php"); 
    $req="SELECT m.idmovies ,m.title , m.descmovie , m.genre, m.year, m.duration FROM movies m where idmovies=".$_GET["id"];
    $res=mysqli_query($conn,$req); 
    if($res) {
        echo "<section class='movie-more' id='moviemore'>
        <div class='nav'>
            <button id='hidebutton' class='hide-button'></Button>
        </div>"; 
        while( ($row=mysqli_fetch_array($res)) != null) {
           echo "
           <h1>".$row[1]."</h1>
           <p>".$row[3]." | <p>".$row[4]." | <p>".$row[5]."
           <h3>Description</h3>
           <p>".$row[2]."</p>
           "; 
        }
        echo "        </div>
        </section>"; 
    }
    else {
        echo"error"; 
    }
?>