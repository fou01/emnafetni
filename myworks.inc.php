<?php
    include("connexion.inc.php"); 
    $req="SELECT m.idmovies , m.title , m.descmovie , m.cardthumb  FROM movies m ";
    $res=mysqli_query($conn,$req); 
    if($res) {
        echo "<div class='works'>"; 
        while( ($row=mysqli_fetch_array($res)) != null) {
           echo "
            <div class='card' style='width: 25rem;'>
                <img class='card-img-top' src='".$row[3]."'>
                <div class='card-body'>
                  <h5 class='card-title'>".$row[1]."</h5>
                  <p class='card-text'>".$row[2]."</p>
                  <a href='moviemore.php?id=".$row[0]."' class='btn btn-outline-primary' id=".$row[0].">See More</a>
                </div>
            </div>
           "; 
        }
        echo "</div>"; 
    }
    else {
        echo"error"; 
    }
?>