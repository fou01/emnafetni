<?php
define("SERVER","localhost"); 
define("USER","root"); 
define("MDP",""); 
define("NOMBASE","emnafetni"); 
$conn=mysqli_connect(SERVER,USER,MDP,NOMBASE); 
if (!$conn) 
    echo "echec de connexion";
?>