<?php
//1. Turime prisijungti prie duomenu bazes
//2. Atlikti tam tikras uzklausas (SELECT,INSERT, UPDATE, DELETE)
//3. Uzdaryti prisijungima

//1. Prisijungimas
//dokumentu sujungimas. Tai yra komandine eilute.
//visi kinamieji, kurie suskurti connection.php faile 
//jie yra pasiekiami index.php faile
require_once ("connection.php");

$sql = "SELECT * FROM `klientai` WHERE 1";
//tik tekstas
$rezultatas = $prisijungimas -> query($sql);
//vykdo uzklausa




while ($klientai = mysqli_fetch_array($rezultatas)){
    echo $klientai["ID"];
    echo "";
    echo $klientai["Vardas"];
    echo "  ";
    echo $klientai["Pavarde"];
    echo "  ";
    echo $klientai["teises_ID"];
    echo "<br>";
};

//is uzklausos paimk rezultatus ir juos sudek i masyva

mysqli_close($prisijungimas);//uzdarem prisijungima

var_dump($klientai)






?>