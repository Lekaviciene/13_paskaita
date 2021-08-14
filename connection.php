<?php

$duomenu_bazes_serveris = "localhost";
$duomenu_bazes_slapyvardis = "root";
$duomenu_bazes_slaptazodis = "";
$duomenu_bazes_pavadinimas = "klientu_valdymo_sistema";




$prisijungimas = mysqli_connect($duomenu_bazes_serveris, $duomenu_bazes_slapyvardis, $duomenu_bazes_slaptazodis, $duomenu_bazes_pavadinimas);

//false - kai prisijungimas nesekmingas, 
//ir negrazina nieko - kai prisijungimas sekmingas

if($prisijungimas==false){
    die("Nepavyko prisijungti". mysqli_connect_error());
} else{
    //echo "Prisijungta sekmingai";
}



?>