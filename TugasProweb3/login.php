<?php

session_start();
$user=$_POST["inEmail"];
$pass=$_POST["inPassword"];
//===========================
$dbuser="admin@gmail.com";
$dbpass="admin123";
//===========================
if($user == $dbuser && $pass == $dbpass){
    echo '<center><h1>Menu</h1><center>';
}
else{
    if(isset($_SESSION["GAGAL"])){
        $_SESSION["GAGAL"]++;
    }
    else{
            $_SESSION["GAGAL"]=1;
        }
        header("location:index.php");
}
    

